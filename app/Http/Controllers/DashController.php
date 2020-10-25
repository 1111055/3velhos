<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Analytics\Period;
use App\Classificacao;
use App\Jogo;
use App\Aposta;
use Carbon\Carbon;

class DashController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();


      
        $class = Classificacao::
                 orderBy('pontos','desc')->get();
        $datasession =  $request->session()->get('datafilter');

        if(!$datasession){

                $datatmp = carbon::now()->format('M d');;
                $jogo = Jogo::where('data_encontro', '>=', carbon::now()->startOfDay())->where('data_encontro', '<', carbon::now()->addDays(1)->startOfDay())->
                orderBy('hora','desc')->get();
                $request->session()->put('datafilter', Carbon::now());
                   
        }else{

                $datatmp = $datasession->format('M d');
              
                $antes = $datasession->startOfDay();
                $depois = $antes->copy()->addDays(1)->startOfDay()->format('y-m-d H:i:s');

                $jogo = Jogo::where('data_encontro', '>=',   $antes->startOfDay()->format('y-m-d H:i:s'))->where('data_encontro', '<', $depois)->
                       orderBy('hora','asc')->get();
              
        }

        $userId = Auth::id();

        $ck2 = 0; $ck3 = 0;$ck1 = 0;$ck0 = 0;
 
        if(!$request->op1 && !$request->op2 && !$request->op3 && !$request->op0){
             $jogo =  $jogo->where('situacao','=','0');
             $ck1 = 1; 
              $request->session()->put('opfilter', 1);
        }else{
            if($request->op0){
                $ck2 = 0; $ck3 = 0;$ck1 = 0;$ck0 = 1;
                 $request->session()->put('opfilter', 0);
            }

            if($request->op1){

                $jogo = $jogo->where('situacao','=','0');
                $ck2 = 0; $ck3 = 0;$ck1 = 1;$ck0 = 0;
                 $request->session()->put('opfilter', 1);
            }

            if($request->op2){

                $jogo = $jogo->where('situacao','=','1');
                $ck2 = 1; $ck3 = 0;$ck1 = 0;$ck0 = 0;
                 $request->session()->put('opfilter', 2);
            }

            if($request->op3){

                 $jogo = $jogo->where('cancelado','=','1');
                 $ck2 = 0; $ck3 = 1;$ck1 = 0;$ck0 = 0;
                  $request->session()->put('opfilter', 3);
            }
        }



        foreach ($jogo as $key => $value) {

            $exist = Aposta::where('user_id','=',$userId)->where('jogo_id', '=', $value->id)->first();


            if($exist != null){
               //  dd($exist);
                 $value['_aposta'] = $exist->aposta;
            }else{
                  $value['_aposta'] = "0";
            }
                   
         }    
         // dd($jogo);
//dd($datatmp);
        $user->authorizeRoles(['master', 'supermaster']);


        return view('backend.index', compact('class','userId','jogo','ck1','ck2','ck3','ck0','datatmp'));
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function filter(Request $request)
    {
        $user = Auth::user();
   
        $datasession =  $request->session()->get('datafilter');       
        $option =  $request->session()->get('opfilter'); 
        $data = $request->data;

        $class = Classificacao::
                 orderBy('pontos','desc')->get();


        $jogo = Jogo::
                 orderBy('data_encontro','desc')->get();

                 $userId = Auth::id();

        $ck2 = 0; $ck3 = 0;$ck1 = 0;$ck0 = 0;


        if($option == 0){
            $ck2 = 0; $ck3 = 0;$ck1 = 0;$ck0 = 1;
        }

        if($option == 1){

            $jogo = $jogo->where('situacao','=','0');
            $ck2 = 0; $ck3 = 0;$ck1 = 1;$ck0 = 0;
        }

        if($option == 2){

            $jogo = $jogo->where('situacao','=','1');
            $ck2 = 1; $ck3 = 0;$ck1 = 0;$ck0 = 0;
        }

        if($option == 3){

             $jogo = $jogo->where('cancelado','=','1');
             $ck2 = 0; $ck3 = 1;$ck1 = 0;$ck0 = 0;
        }
        


        if($data){
          
             if($data == 1){
                $subnov = $datasession->subDays(1)->startOfDay();

                $jogo = $jogo->where('data_encontro', '=', $subnov);

                  $datatmp =  $subnov->format('M d');
                   $request->session()->put('datafilter',   $subnov);

             }else{
                 $subnov = $datasession->addDays(1)->startOfDay();
                  $jogo = $jogo->where('data_encontro', '=', $subnov);
                  $datatmp = $subnov->format('M d');
                   $request->session()->put('datafilter',   $subnov);
             }

        }


        foreach ($jogo as $key => $value) {

            $exist = Aposta::where('user_id','=',$userId)->where('jogo_id', '=', $value->id)->first();


            if($exist != null){
               //  dd($exist);
                 $value['_aposta'] = $exist->aposta;
            }else{
                  $value['_aposta'] = "0";
            }
                   
         }    
         //dd($datatmp);

        $user->authorizeRoles(['master', 'supermaster']);


        return view('backend.index', compact('class','userId','jogo','ck1','ck2','ck3','ck0','datatmp'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function piechart($id,$tipo)
    {
      
        return response()
            ->json(0);
    }







}
