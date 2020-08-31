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
                    <li class="active"><a href="{{route('orcamento')}}"><i class="fa fa-newspaper-o"></i> Pedidos Orçamentos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">     
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>Numero Orçamento</th>
                              <th>Nome</th>
                              <th>Email</th>
                              <th>Telefone</th>
                              <th>Empresa</th>
                              <th>Data</th>
                              <th>Ficheiro</th>
                              <th>Obs</th>
                            </tr>
                            @foreach($orcamento as $item)
                              <tr>
                                <td> <a href="{{ route('orcamento.show', $item->id)}}">{{ $item->id }}</a></td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telemovel }}</td>
                                <td>{{ $item->empresa }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td> 
                                    
                                    @if(file_exists(public_path().'/logotipo/orcamento/'.$item->pathfile) &&  !empty($item->pathfile))

                                      <a href="{{ (route('orcamento.download',[$item->pathfile,$item->id])) }}" target="_blank"> Link </a>
                                    @endif
                                </td>
                                <td>{{ $item->obs }}</td>
                              </tr>
                              @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop