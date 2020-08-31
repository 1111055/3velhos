<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jogo;
use App\Aposta;
use App\Classificacao;



class JogoController extends Controller
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

    public function closebet()
    {
         $id = request()->jogoid;
         $resultado = request()->resultado;
       
         $bet = Jogo::find($id);

         $bet->situacao = 1;
         $bet->resultado = $resultado;

         $exist = Aposta::where('jogo_id', '=', $id)->get();

         foreach ($exist as $key => $value) {

            if($value->aposta ==  $resultado){

                $class = Classificacao::where('user_id', '=', $value->user_id)->first();
                $class->pontos += 1;
                $class->save();
            }

         }

         $bet->save();
        // return response()->json(0);
    }
}
