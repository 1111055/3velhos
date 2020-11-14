<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jogo;
use App\Aposta;
use App\Classificacao;
use App\Article;



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


 if($bet->situacao == 0){
         $exist = Aposta::where('jogo_id', '=', $id)->get();

         if($resultado != 3 && $resultado != "Cancelado"){

             $bet->situacao = 1;
             $bet->resultado = $resultado;

             foreach ($exist as $key => $value) {

                if($value->aposta ==  $resultado){

                    $class = Classificacao::where('user_id', '=', $value->user_id)->first();
                    $class->pontos += 1;
                    $class->save();
                }

             }
         }else{
        
             $bet->situacao = 2;
             $bet->resultado = 3;
             $bet->cancelado = 1;
         }

         $bet->save();


         $vit = $bet->resultado == "1" ? "Jogo: ".$bet->eq1." x ".$bet->eq2." vitória do ".$bet->eq1 : "vitória do ".$bet->eq2;

         if($bet->resultado == "x"){
                 $vit = "O jogo ".$bet->eq1." x ".$bet->eq2." acabou empatado.";
         }

          $class = Classificacao:: 
                 orderBy('pontos','desc')->get();

          $totalap = Aposta::where('aposta', '=', $bet->resultado)->where('jogo_id', '=', $id)->get();

          $html = count($totalap)." Pessoas acertaram no jogo ". $bet->eq1." x ".$bet->eq2." neste resultado.<br/><br/>";

          
          $html2 = "Tabela Classificativa<br/>";

          $html1 =   "<table class='table'>
                      <tbody>";
                        foreach ($class as $key => $value) {
                               $html1 =  $html1."<tr>
                                          <td>".$value->utilizador[0]->name."</td><td>".$value->pontos."</td>
                                        </tr>";
                        }
                       
            $html1 = $html1."</tbody></table>";

            $html =  $html.$html2.$html1;

            if($bet->cancelado == 1){$html = $bet->eq1." x ".$bet->eq2.". Este jogo foi cancelado!"; $vit = "Cancelado";}

           Article::create([
                'title'    => "Jogo Fechado, ". $vit,
                'body'     => $html, 
                'activo'   => 1,
                'fonte'    => " 3 Velhos."
                
            ]); 




         return response()->json(0);
     }else{
          return response()->json(1);
     }
    }

    public function newgame(Request $request)
    {


         $countjogos = Jogo::where('data_encontro', '=', request()->data_encontro)->where('cancelado', '=', 0)->get();

        //dd(count($countjogos));

         if(count($countjogos) == 8){




              return response()->json(1);
         }else{

                 Jogo::create([
                    'eq1'           => request()->eq1,
                    'eq2'           => request()->eq2,
                    'data_encontro' => request()->data_encontro,
                    'hora'          => request()->hora,
                    'situacao'      => 0,
                    'resultado'     => 0,
                ]);

              
           
                $countjogostmp = Jogo::where('data_encontro', '=', request()->data_encontro)->where('cancelado', '=', 0)->get();

                  if( count($countjogostmp) == 8){
                      $game = Jogo::where('cancelado','=','0')->orderBy('id', 'desc')->take(8)->get();


                      $html = "Estão inseridos novos jogos. Boa Sorte. <br/><br/>";


                      $html =  $html."<table class='table'>
                                  <tbody>";
                                    foreach ($game as $key => $value) {
                                           $html =  $html."<tr>
                                                      <td>".$value->eq1."</td><td>x</td><td>".$value->eq2."</td>
                                                    </tr>";
                                    }
                                   
                       $html = $html."</tbody></table>";

            
              
                       Article::create([
                            'title'    => "Novos Jogos Disponiveis",
                            'body'     => $html, 
                            'activo'   => 1,
                            'fonte'    => " 3 Velhos."
                            
                        ]); 
                  }

           return response()->json(0);
        }
    }
}
