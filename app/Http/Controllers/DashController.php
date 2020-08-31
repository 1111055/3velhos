<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Analytics\Period;
use App\Classificacao;
use App\Jogo;
use App\Aposta;
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
    public function index()
    {
        $user = Auth::user();
   


        $class = Classificacao::
                 orderBy('pontos','desc')->get();


        $jogo = Jogo::
                 orderBy('data_encontro','desc')->get();

                 $userId = Auth::id();



        foreach ($jogo as $key => $value) {

            $exist = Aposta::where('user_id','=',$userId)->where('jogo_id', '=', $value->id)->first();


            if($exist != null){
               //  dd($exist);
                 $value['_aposta'] = $exist->aposta;
            }else{
                  $value['_aposta'] = "0";
            }
                   
         }    

        $user->authorizeRoles(['master', 'supermaster']);


        return view('backend.index', compact('class','userId','jogo'));
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
