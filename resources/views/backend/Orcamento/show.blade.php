@extends('backend.app')

@section('content')


 @include('backend.alert')

        
              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Pedidos Orçamentos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('orcamento')}}"><i class="fa fa-newspaper-o"></i> Pedidos Orçamentos</a></li>
                    <li class="active"><a href="{{route('orcamento.show',$orcamento->id)}}"><i class="fa fa-newspaper-o"></i> Detalhe Orçamento</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">

                       <div class="col-xs-12">
                          <div class="panel panel-default">
                            <div class="panel-body">
                             <div class="col-xs-6">
                              <ul class="list-group">
                                <li class="list-group-item">Nome: {{ $orcamento->nome}}</li>
                                <li class="list-group-item">Email: {{ $orcamento->email}}</li>
                                <li class="list-group-item">Empresa: {{ $orcamento->empresa}}</li>
                                <li class="list-group-item">Cotacto: {{ $orcamento->telemovel}}</li>
                                <li class="list-group-item">Data: {{ $orcamento->created_at}}</li>
                                <li class="list-group-item">Observações: {{ $orcamento->obs}}</li>
                                <li class="list-group-item">Download Ficheiro: 
                                    @if(file_exists(public_path().'/logotipo/orcamento/'.$orcamento->pathfile) &&  !empty($orcamento->pathfile))
                                        <a target="_blank" href="{{ (route('orcamento.download',[$orcamento->pathfile, $orcamento->id])) }}"> Link </a></li>  
                                    @endif    
                              </ul>
                             <div>
                            </div>
                          </div>
                        </div>
                    <div class="panel panel-default">
                      <div class="panel-body">
                       <div class="col-xs-12">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Produto</th>
                              <th>Codigo Artigo</th>
                              <th>Cor</th>
                              <th>Tamanho</th>
                              <th>Quantidade</th>
                            </tr>

                             @foreach($orcamento->getOrcamentolines as $item)
                              <tr>
                                <td><a href="{{route('produto.show',$item->produto->id)}}" target="_black"><img src="{{ $item->produto->path }}" class="img-thumbnail" style="width: 18%; height: 30%;"></a></td>
                                <td>{{ $item->produto->titulo }}</td>
                                <td>{{ $item->produto->cod_art }}</td>

                                <td> @if($item->color_id > 0 && $item->cor != null){{ $item->cor->titulo}} @endif</td>
                                <td> @if($item->size_id > 0 && $item->tamanho != null){{ $item->tamanho->titulo}} @endif</td>
                                <td>{{ $item->quantidade }}</td>
                              </tr>
                              @endforeach

                          </table>
                        </div>
                        </div>
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop

