@extends('backend.app')

@section('content')




  <div class="alert alert-success" id="showsucess" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed; width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>
  <div class="alert alert-danger" id="showerror" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed;  width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <section class="content" >
              <div class="row">
                <div class="col-xs-12" id="jogoclass">

                  <div class="nav-tabs-custom">
                      <!-- Tabs within a box -->
                      <ul class="nav nav-tabs">
                        <li @if($filter == 0) class="active" @endif><a href="#feednews" data-toggle="tab">Feed News</a></li>                     
                        <li @if($filter == 1) class="active" @endif><a href="#jogosteste" data-toggle="tab">Jogos</a></li>
                        <li><a href="#classi" data-toggle="tab">Classificação</a></li>   
                        
                      </ul>
                      <div class="tab-content no-padding" > 
                        
                        
                        <div class="chart tab-pane" id="classi">
                         <div class="panel panel-default"  id="filtergrupo" style="display: none;" >
                            <div class="panel-body" style="padding: 0px !important; background-color: #80532d ;">   
                                       <ul class="control-sidebar-menu" style="margin-bottom: 1px !important;">
                                        <li class="text-center">
                                           <input id="grupoactivo" type="hidden" value="0">
                                            <button type="button" class="btn btn-sm btn-info  btn-xs grupo" idg="-1" >
                                                      Geral
                                             </button>
                                           @foreach( $grupos as $item)
                                             <button type="button" class="btn btn-sm btn-info  btn-xs grupo" idg="{{$item->grupo_id}}" >

                                                          {{ $item->grupo->nome }}
                                             </button>
                                           @endforeach
                                        </li>
                                      </ul>
                             </div>
                          </div>
                        <div class="box box-primary">
                        <div class="box-header with-border">
                          <button class="btn btn-default btn-sm" id="btnfilterclassifica"><i class="fa fa-filter"></i> </button> <h3 class="box-title">Classificação</h3>
                        </div>
                          <div class="col-lg-3">
                          </div>
                           <div class="col-lg-6">       
                              <div class="box-body">
                                <ul class="products-list product-list-in-box" id="classifica">
                               
                                </ul>
                              </div>
                          </div>
                          <div class="col-lg-3">
                          </div>
                      </div>                        
                        </div>
                        <div class="chart tab-pane @if($filter == 0) active @endif" id="feednews">
                           <div class="col-lg-3">
                          </div>
                           <div class="col-lg-6">
                            <div id="app">
                              <section class="content">
                                   <articles></articles>
                              </section>
                            </div>
                           </div>
                          <div class="col-lg-3">
                          </div>
                        </div>
                        <div class="chart tab-pane @if($filter == 1) active @endif" id="jogosteste">
                          <div class="col-lg-3">
                          </div>
                           <div class="col-lg-6">
                              <div class="panel panel-default" id="filterjogo" @if($filter == 0) style="display: none;" @endif>
                                <div class="panel-body" style="padding: 0px !important; background-color:  #80532d ;">   
                                   <ul class="control-sidebar-menu" style="margin-bottom: 1px !important;">
                                            <li>
                                                   <div class="three-inline-buttons">
                                                          <p>
                                                              <label>
                                                                  <a href="{{route('home')}}?op0=1" class="btn @if($ck0==1) btn-warning @else btn-default @endif btn-xs">Todos</a>
                                                              </label>

                                                              <label>
                                                                  <a href="{{route('home')}}?op1=1" class="btn @if($ck1==1) btn-warning @else btn-default @endif btn-xs">Abertos</a>
                                                              </label>

                                                              <label> 
                                                                <a href="{{route('home')}}?op2=1" class="btn @if($ck2==1) btn-warning @else btn-default @endif  btn-xs">Fechados</a>
                                                              </label>

                                                              <label>
                                                                  <a href="{{route('home')}}?op3=1" class="btn @if($ck3==1) btn-warning @else btn-default @endif btn-xs">Cancelados</a>
                                                              </label>

                                                              <label>
                                                                   @if(Auth::user()->isinrule(['master']))

                                                                           <button type="button" class="btn btn-sm btn-info  btn-xs" data-toggle="modal" data-target="#exampleModal">
                                                                                          Inserir Novo Jogo
                                                                           </button>

                                                                    @endif
                                                              </label>
                                                          </p>
                                                   </div>
                                            </li>
                                    </ul>

                                </div>
                              </div>
                                <div class="box">
            
                                  <div class="box-header">
                                  <div class=" col-lg-5">
                                 <ul class="control-sidebar-menu">
                                    <li>
                                      <div class="input-group">
                                         <span class="input-group-btn">
                                             <button class="btn btn-default btn-sm" id="btnfilterjogos"><i class="fa fa-filter"></i> </button> 
                                        </span>
                                         <span class="input-group-btn">
                                          <form action="{{route('home.data')}}" method="post">
                                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                              <input type="hidden" value="{{$daybefore}}" name="data">
                                              <button type="submit" class="btn btn-default "><i class="fa fa-arrow-left"></i></button>
                                          </form>
                                           
                                         </span>
                                         <input type="text" class="form-control text-center" value="{{ $datatmp }}" readonly="true">
                                         <span class="input-group-btn">
                                          <form action="{{route('home.data')}}" method="post">
                                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                              <input type="hidden" value="{{$dayafter}}" name="data">
                                              <button type="submit" class="btn btn-default "><i class="fa fa-arrow-right"></i></button>
                                          </form>
                                              
                                         </span>
                                       </div>
                                    </li>
                                  </ul>
                               </div>
                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body table-responsive no-padding" >
                                        <table class="table no-margin" id="mytable" cellspacing="0" cellpadding="0">
                                          <thead>
                                              <tr>
                                                <th class="col-xs-5 text-center">Casa</th>
                                                <th class="col-xs-1 text-center">x</th>
                                                <th class="col-xs-5 text-center">Fora</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach( $jogo as $item)

                                              <tr><td colspan="3" class="text-cente {{ $item->classaposta }}" >
                                                      <div class="col-xs-10">
                                                             <div class="col-xs-6">
                                                                 {!! $item->vencedor !!}
                                                             </div>
                                                             @if($item->situacao == 0 && $item->cancelado == 0)
                                                                @if(Auth::user()->isinrule(['master']))
                                                                <div class="col-xs-2" id="fec{{ $item->id }}">
                                                                  <button type="button"  idjogo="{{ $item->id }}" class="btn btn-sm btn-xs btn-warning btn-flat fechar">
                                                                          Fechar Jogo
                                                                  </button>
                                                                </div>
                                                                 @else
                                                                 <div class="col-xs-2">
                                                                   <span class="label label-info" style="margin-top: 1%;">A decorrer</span>
                                                                 </div>
                                                                 @endif
                                                             @endif
                                                           
                                                        </div>
                                                      <div class="col-xs-2" style="margin-top: 1%;">
                                                      <span class="label label-default  text-center">{{ $item->hora }}</span>
                                                    </div>
                                                  </td>
                                                <td></td>  @if($ck1!=1)<td></td> @endif</tr>
                                                  <tr>

                                                    <td class="col-xs-2  text-right">
                                                        
                                                        @if($item->_aposta == "1")

                                                          <button type="button" idjogo="{{ $item->id }}" app="1"  class="btn btn-success btn-sm apptmp">{{ $item->eq1 }}   </button>
                                                   
                                                         @else
                                                          <button type="button" idjogo="{{ $item->id }}" app="1"  class="btn btn-default btn-sm apptmp">{{ $item->eq1 }}  </button>
                                                    
                                                      @endif
                                                    </td>
                                                    <td class="col-xs-1  text-center">
                                                   
                                                       @if($item->_aposta == "x")
                                                         <button type="button" idjogo="{{ $item->id }}" app="x"  class="btn btn-success btn-sm apptmp">X</button>
                                                        @else
                                                          <button type="button" idjogo="{{ $item->id }}" app="x"  class="btn btn-default btn-sm apptmp">X</button>
                                                        @endif
                                                    </td>
                                                    <td class="col-xs-2">
                                               
                                                       @if($item->_aposta == "2")
                                                         <button type="button" app="2"  idjogo="{{ $item->id }}" class="btn btn-success btn-sm apptmp">{{ $item->eq2 }}</button>
                                                       @else
                                                         <button type="button" app="2"  idjogo="{{ $item->id }}" class="btn btn-default btn-sm apptmp">{{ $item->eq2 }}</button>
                                                       @endif
                                                    </td>

                                                  </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
                                  </div>
                                </div>
                                </div>
                          <div class="col-lg-3">
                          </div>
                        </div>
                      </div>
                  </div>

                </div>
              </div>
    </section>

 </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Jogo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <form name="formsend" method="POST" action="{{route('jogo.newgame')}}">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
       
              <div class="form-group">
                <label for="exampleInputEmail1">Equipa Casa</label>
                <input type="text" class="form-control" id="eq1" name="eq1" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Equipa Fora</label>
                <input type="text" class="form-control" id="eq2" name="eq2" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Data</label>
                <input type="date" class="form-control" id="data_encontro" name="data_encontro">
              </div>
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Hora:</label>

                  <div class="input-group">
                    <input type="text" name="hora" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>
              </div>
            
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    </div>
  </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalapostar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apostar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
       <form name="formsendgame" method="POST" action="">
        <div class="modal-body">
              <input type="hidden" id="rota" name="rota" value="{{route('aposta')}}">
              <input type="hidden" id="jogo_id" name="jogo_id" value="">
              <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Apostar</label>
                <select class="form-control" id="apostatmp" name="aposta">
                  <option value="0">-- Selecionar uma aposta --</option>
                  <option value="1">1</option>
                  <option value="x">x</option>
                  <option value="2">2</option>
                </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    </div>
  </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="resultadotmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fechar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
       <form name="formsendaposta" method="POST" action="{{route('jogo.closebet')}}">
        <div class="modal-body">
              <input type="hidden" id="user_id" name="user_id" value="{{$userId}}">
              <input type="hidden" id="jogoid" name="jogoid" value="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Resultado</label>
                <select class="form-control" id="resultadotp" name="resultado">
                  <option value="0">-- Selecionar uma aposta --</option>
                  <option value="1">1</option>
                  <option value="x">x</option>
                  <option value="2">2</option>
                  <option value="3">Cancelado</option>
                </select>
              </div>
            
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    </div>
  </div>
</div>
@stop
@section('scripts')
<script type="text/javascript">

$( "#btnfilterjogos" ).click(function() {
  $( "#filterjogo" ).slideToggle( "slow" );
});

$( "#btnfilterclassifica" ).click(function() {
  $( "#filtergrupo" ).slideToggle( "slow" );
});

</script>
@stop
