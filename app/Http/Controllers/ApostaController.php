<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aposta;
use App\Http\Requests\ApostaRequest;

class ApostaController extends Controller
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

        $bet = Aposta::where('user_id','=',request()->user_id)->where('jogo_id','=',request()->jogo_id)->get();

      
        if(count($bet) == 0){
                Aposta::create([
                    'user_id'    => request()->user_id,
                    'jogo_id'    => request()->jogo_id,
                    'aposta'     => request()->aposta
                    
                ]);
        }else{
            $value = $bet->first();

             $value->aposta  = request()->aposta;
             $value->save();
        }

         return response()->json(0);
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
