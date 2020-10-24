@extends('backend.app')

@section('content')


<style type="text/css">
  
  @media (max-width: 830px) {
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
.apptmp{
  width: 100%;
}
.apptmp2{
  width: 100%;
}


.three-inline-buttons .button {
    margin-left: 15px;
    margin-right: 15px;
}

.three-inline-buttons {
     display: table;
     margin: 0 auto;
}

@media only screen and (max-width: 960px) {

    .three-inline-buttons .button{
        width: 100%;
        margin: 20px;
        text-align: center;
    }
    
}
</style>


  <div class="alert alert-success" id="showsucess" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed; width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>
  <div class="alert alert-danger" id="showerror" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed;  width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
       
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
      </section>

        <div class="container col-xs-8" id="filterclass">
          <div class="panel panel-default">
            <div class="panel-body">
                          <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="col-xs-12">
                    <button type="button" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#exampleModal">
                        Inserir Novo Jogo
                    </button>
                </div>
                <div class="col-xs-12">
                   
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

                            
                          </p>
                         </div>
            
                </div>
                <div class="col-xs-2" id="bodyarrow" style="float: right;">
                  
                     <div class="input-group">

                       <span class="input-group-btn">
                        <form action="{{route('home.data')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" value="1" name="data">
                            <button type="submit" class="btn btn-default "><i class="fa fa-arrow-left"></i></button>
                        </form>
                         
                       </span>
                       <input type="text" class="form-control text-center" value="{{ $datatmp }}" readonly="true">
                       <span class="input-group-btn">
                        <form action="{{route('home.data')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" value="2" name="data">
                            <button type="submit" class="btn btn-default "><i class="fa fa-arrow-right"></i></button>
                        </form>
                            
                       </span>
                     </div>
          
                </div>
            </div>
            <!-- /.box-footer -->
            </div>
          </div>
        </div>
         <div class="container col-xs-8" id="jogoclass">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Jogos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th class="col-xs-2 text-right">Casa</th>
                    <th class="col-xs-1 text-center">x</th>
                    <th class="col-xs-2">Fora</th>
                    <th>Hora</th>
                    <th>Situação</th>
                    @if($ck1!=1) 
                       <th class="col-xs-1 text-center">Resultado</th>
                    @endif
                  </tr>
                  </thead>
                  <tbody>
                      @foreach( $jogo as $item)
                          <tr>
                            <td class="col-xs-2  text-right">
                              
                                @if($item->_aposta == "1")

                                  <button type="button" idjogo="{{ $item->id }}" app="1"  class="btn btn-success apptmp">{{ $item->eq1 }}   </button>
                           
                                 @else
                                  <button type="button" idjogo="{{ $item->id }}" app="1"  class="btn btn-default apptmp">{{ $item->eq1 }}  </button>
                            
                              @endif
                            </td>
                            <td class="col-xs-1  text-center">
                           
                               @if($item->_aposta == "x")
                                 <button type="button" idjogo="{{ $item->id }}" app="x"  class="btn btn-success apptmp">X</button>
                                @else
                                  <button type="button" idjogo="{{ $item->id }}" app="x"  class="btn btn-default apptmp">X</button>
                                @endif
                            </td>
                            <td class="col-xs-2">
                       
                               @if($item->_aposta == "2")
                                 <button type="button" app="2"  idjogo="{{ $item->id }}" class="btn btn-success apptmp">{{ $item->eq2 }}</button>
                               @else
                                 <button type="button" app="2"  idjogo="{{ $item->id }}" class="btn btn-default apptmp">{{ $item->eq2 }}</button>
                               @endif
                            </td>
                            <td><span class="label label-success">{{ $item->hora }}</span></td>
                            <td>
                                @if($item->situacao == 1)
                                  <span class="label label-danger">Jogo Fechado</span>
                                @elseif($item->situacao == 0)
                                  <div id="fec{{ $item->id }}">
                                    <button type="button"  idjogo="{{ $item->id }}" class="btn btn-sm btn-success btn-flat fechar">
                                            Fechar Jogo
                                    </button>
                                  </div>
                                @else
                                      <span class="label label-warning">Cancelado</span>
                                @endif
                            </td>
                            @if($ck1 != 1)
                               @if($item->resultado == '0')
                                   <td  class="col-xs-1 text-center"> <span class="label label-danger"> S/ Resultado </span></td>
                               @elseif($item->resultado == '1' || $item->resultado == 'x' || $item->resultado == '2' )
                                   <td  class="col-xs-1 text-center"> <span class="label label-success"> {{ $item->resultado }} </span></td>
                               @else
                                   <td  class="col-xs-1 text-center"> <span class="label label-warning"> Cancelado </span></td>
                               @endif
                           @endif   
                          </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>

          </div>
         </div>
        <div class="container col-xs-4" style="float: right;" id="Classificacaoclass">
            <section>
                        <!-- PRODUCT LIST -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Classificação</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <ul class="products-list product-list-in-box" id="classifica">
                     
                      </ul>
                    </div>
                  </div>
                  <!-- /.box -->
            </section>
         </div>
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