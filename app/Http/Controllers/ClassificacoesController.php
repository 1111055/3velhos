<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classificacao;
use App\Usergrupo;
use Illuminate\Support\Facades\Auth;

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

        if($idgrupo == -1){
            $todos = true;
        }elseif($idgrupo == 0){
           $grupo  = Usergrupo::where('user_id', '=',$user->id)->first();
        }else{
           $grupo  = Usergrupo::where('user_id', '=',$user->id)->where('grupo_id','=',$idgrupo)->first();
        }

       if($idgrupo != -1){
           $grupoallusers = Usergrupo::where('grupo_id', '=',$grupo->grupo_id)->pluck('user_id')->toArray();
        }
      //  dd($grupoallusers);

        if($todos == false){
            $class = Classificacao::whereIn('user_id', $grupoallusers)-> 
                     orderBy('pontos','desc')->get();
        }else{
             $class = Classificacao:: 
                 orderBy('pontos','desc')->get();

        }
       //  dd($class);

        foreach ($class as $key => $value) {
            $value['nome'] = $value->utilizador[0]->name;
        }         

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
