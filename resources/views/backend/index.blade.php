@extends('backend.app')

@section('content')



</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
       
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
      </section>
         <div class="col-xs-8">

          <!-- TABLE: LATEST ORDERS -->
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
                    <th>Data</th>
                    <th>Situação</th>
                    <th class="col-xs-1 text-center">Apostar</th>
                    <th class="col-xs-1 text-center">Resultado</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach( $jogo as $item)
                          <tr>
                            <td class="col-xs-2  text-right"><span>{{ $item->eq1 }}</span></td>
                            <td class="col-xs-1  text-center">X</td>
                            <td class="col-xs-2"><span>{{ $item->eq2 }}</span></td>
                            <td><span class="label label-success">{{ $item->data_encontro }}</span></td>
                            <td>
                                @if($item->situacao == 1)
                                  <span class="label label-danger">Jogo Fechado</span>
                                @else

                                  <button type="button"  idjogo="{{ $item->id }}" class="btn btn-sm btn-success btn-flat fechar">
                                          Fechar Jogo
                                  </button>

                                @endif
                            </td>
                            <td  class="col-xs-1 text-center">
                              @if($item->_aposta == '0')
                              <button type="button" idjogo="{{ $item->id }}"  class="btn btn-sm btn-info btn-flat pull-left apostar">
                                  <i class="fa fa-plus-circle"></i>
                            </button>
                            @else
                              <span class="label label-warning"> {{ $item->_aposta }} </span>
                            @endif
                            </td>
                               <?php  print_r($item->_aposta);?> 
                               @if($item->resultado == '0')
                                   <td  class="col-xs-1 text-center"> <span class="label label-danger"> S/ Resultado </span></td>
                               @else
                                   <td  class="col-xs-1 text-center"> <span class="label label-success"> {{ $item->resultado }} </span></td>
                               @endif
                          </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button type="button" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#exampleModal">
                    Inserir Novo Jogo
                    </button>
            </div>
            <!-- /.box-footer -->
          </div>
         </div>
        <div class="col-xs-4" style="float: right;">
            <section>
                        <!-- PRODUCT LIST -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Classificação</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <ul class="products-list product-list-in-box">
                      @foreach($class as $item)


                        <li class="item">
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">{{$item->utilizador[0]->name }}
                              <span class="label label-success pull-right">{{ $item->pontos }}</span></a>
                          </div>
                        </li>
                        @endforeach
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
       <form name="formsend" method="POST" action="{{route('aposta')}}">
        <div class="modal-body">
              <input type="hidden" id="user_id" name="user_id" value="{{$userId}}">
              <input type="hidden" id="jogo_id" name="jogo_id" value="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Apostar</label>
                <select class="form-control" id="exampleFormControlSelect1" name="aposta">
                  <option val="0">-- Selecionar uma aposta --</option>
                  <option val="1">1</option>
                  <option val="x">x</option>
                  <option val="2">2</option>
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
       <form name="formsend" method="POST" action="{{route('jogo.closebet')}}">
        <div class="modal-body">
              <input type="hidden" id="user_id" name="user_id" value="{{$userId}}">
              <input type="hidden" id="jogoid" name="jogoid" value="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Resultado</label>
                <select class="form-control" id="exampleFormControlSelect1" name="resultado">
                  <option val="0">-- Selecionar uma aposta --</option>
                  <option val="1">1</option>
                  <option val="x">x</option>
                  <option val="2">2</option>
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