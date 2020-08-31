@extends('backend.app')

@section('content')


               @include('backend.alert')
               
              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Acessos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('role')}}"><i class="fa fa-paint-brush"></i> Acessos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             

                  <div class="container">
                       <div class="panel panel-default">
                          <div class="panel-heading">Filtros</div>
                           <div class="panel-body">
                            <div class="box-header">

                              <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">

                       <div class="col-xs-12">
                          <div class="panel panel-default">
                            <div class="panel-body">
                             <div class="col-xs-6">
                              <ul class="list-group">
                                <li class="list-group-item">Nome: {{ $role->name}}</li>
                                <li class="list-group-item">Descrição: {{ $role->description}}</li> 
                              </ul>
                             </div>
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
                                  <th>Nome</th>
                                  <th>Email</th>
                                  <th>#</th>
                                </tr>
                                @if(count($role->users) > 0 )

                                 @foreach($role->users as $itemtmp)
                                  <tr>
                                    <td><a href="{{route('user.show',$itemtmp->id)}}" target="_black"><img src="{{ $itemtmp->path }}" class="img-thumbnail" style="max-width: 15%;"></a></td>
                                    <td>{{ $itemtmp->name }}</td>
                                    <td>{{ $itemtmp->email }}</td>
                                    <td>
                                      {{ Form::open(['route' => ['role.removerole', $role->id,$itemtmp->id], 'method' => 'delete']) }}
                                           <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                      {{ Form::close() }}
                                    </td>
                                  </tr>
                                  @endforeach
                                @endif    
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