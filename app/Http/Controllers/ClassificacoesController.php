<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classificacao;
use App\Usergrupo;
use App\Jogo;
use App\Aposta;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClassificacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getall(Request $request)
    {
       $idgrupo =  request()->id;
       $user = Auth::user();
       $todos = false;

       
       $now = Carbon::now();
       //$mes = $now->month;
       $mes = 6;
       $ano = $now->year;

       $users_tmp = User::where('activo', '=','1')->pluck('ID')->all();
      /*  if($idgrupo == -1){
            $todos = true;
        }elseif($idgrupo == 0){
           $grupo  = Usergrupo::where('user_id', '=',$user->id)->first();
        }else{
           $grupo  = Usergrupo::where('user_id', '=',$user->id)->where('grupo_id','=',$idgrupo)->first();
        }

       if($idgrupo != -1){
           $grupoallusers = Usergrupo::where('grupo_id', '=',$grupo->grupo_id)->pluck('user_id')->toArray();
        }

    
       
        $teste_tmp = array_intersect(  $grupoallusers,  $users_tmp);
    
        if($todos == false){

           
             $apostastmp = Aposta::whereMonth('created_at', '=', $mes) ;

        //     dd($apostastmp);  

            $class = Classificacao::whereIn('user_id', $teste_tmp)-> 
                     orderBy('pontos','desc')->get();
        }else{


               $class = Classificacao::whereIn('user_id', $users_tmp)-> 
                     orderBy('pontos','desc')->get();

        }*/
         $class = Classificacao::whereIn('user_id', $users_tmp)-> 
                     orderBy('pontos','desc')->get();
       //  dd($class);



     
        foreach ($class as $key => $value) {
              

           


           // $teste = DB::table('resutladosestatisticas')->whereMonth('created_at', '=', $mes)->where('user_id','=', $value->utilizador[0]->id)->count();
           // $teste2 = DB::table('resutladosestatisticas')->where('result', '=', 1)->whereMonth('created_at', '=', $mes)->where('user_id','=', $value->utilizador[0]->id)->count();

            $teste = DB::table('resutladosestatisticas')->whereMonth('created_at', '>=', $mes)->whereYear('created_at', '>=', $ano)->where('user_id','=', $value->utilizador[0]->id)->count();
            $teste2 = DB::table('resutladosestatisticas')->where('result', '=', 1)->whereMonth('created_at', '>=', $mes)->whereYear('created_at', '>=', $ano)->where('user_id','=', $value->utilizador[0]->id)->count();

 
            $teste3 = DB::table('resutladosestatisticas')->whereYear('created_at', '=', $ano)->where('user_id','=', $value->utilizador[0]->id)->count();
            $teste4 = DB::table('resutladosestatisticas')->where('result', '=', 1)->whereYear('created_at', '=', $ano)->where('user_id','=', $value->utilizador[0]->id)->count();
         


           $value['nome'] = $value->utilizador[0]->name;

            if($teste > 0){
                $perc = ($teste2 * 100) / $teste;
            }
            else{
                 $perc = 0;
            }

            $value['percentagens'] = $teste2."/".$teste." (".(int)$perc."%)";
            $value['valor_tmp'] = $teste2;
            $value['perc_tmp'] = $perc;


            if($teste3 > 0){
                $percano = ($teste4 * 100) / $teste3;
            }
            else{
                 $percano = 0;
            }

            $value['percentagensano'] = $teste4."/".$teste3." (".(int)$percano."%)";
            $value['valor_tmp_ano'] = $teste4;
            $value['perc_tmp_ano'] = $percano;



        }         


       /* $class = $class->sort(function($a, $b) {
               if($a->valor_tmp === $b->valor_tmp) {
                 if($a->perc_tmp === $b->perc_tmp) {
                   return 0;
                 }
                 return $a->valor_tmp > $b->valor_tmp ? -1 : 1;
               } 
               return $a->perc_tmp > $b->perc_tmp ? -1 : 1;
            });*/

       return response()->json($class);

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
}
