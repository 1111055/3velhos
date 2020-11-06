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
table#mytable,
table#mytable td
{
    border: none !important;
    padding:4px; 
    border-width:0px; 
    margin:0px; 
}
table#mytable {
border:0px;
border-collapse:collapse;
border-spacing:0px;
}


</style>


  <div class="alert alert-success" id="showsucess" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed; width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>
  <div class="alert alert-danger" id="showerror" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed;  width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <section class="content" >
              <div class="row">
                <div class="col-xs-8" id="jogoclass">
                  <div class="box">
            
                    <div class="box-header">
                    <button class="btn btn-default btn-sm" data-toggle="control-sidebar"><i class="fa fa-filter"></i> </button>  <h3 class="box-title">{{ $datatmp }}</h3>
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
                                           
                                                  {!! $item->vencedor !!}
                                                  
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
                <div class="container col-xs-4" style="float: right;" id="Classificacaoclass">

                      <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Classificação</h3>
                        </div>

                        <div class="box-body">
                          <ul class="products-list product-list-in-box" id="classifica">
                         
                          </ul>
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

@include('backend.rightsite')