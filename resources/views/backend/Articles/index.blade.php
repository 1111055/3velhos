@extends('backend.app')

@section('content')
 
              @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Artigos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('articles.list')}}"><i class="fa fa-sliders"></i> Artigos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                         @if(Auth::user()->isinrule(['supermaster']))
                           <div class="panel panel-default">
                              <div class="panel-body">
                              <!-- Horizontal Form -->
                                <div class="col-xs-12">
                                  <div class="box box-info">
                                       {!! Form::open(['url' => 'articles','class' => 'form-horizontal']) !!}
                                          <div class="box-body">
                                              <div class="col-xs-8">
                                                 <div class="form-group col-xs-10">
                                                   {!! Form::label('* Titulo ') !!}
                                                   {!! Form::text('title',null,['class' => 'form-control']) !!}
                                                 </div>
                                              </div>
                                          </div>
                                          <div class="box-footer">
                                              {!! Form::submit('Novo',['class' => 'btn btn-info pull-right']) !!}
                                          </div>
                                        {!! Form::close() !!}
                                    </div>
                                  </div>
                                </div>
                            <!-- /.box-body -->
                        </div>
                        @endif
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Titulo</th>
                              <th>Imagem</th>
                              <th>Categoria</th>
                              <th>Criado</th>
                              <th>Actualizado</th>
                              <th class="text-center">Active</th>
                              <th>#<th>
                            </tr>
                              @foreach($art as $item)
                              <tr>

                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td> <img src="{{ $item->path }}" class="img-thumbnail" style="max-width: 15%;"></td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->created_at}}</td>
                                <td>{{ $item->updated_at}}</td>

                                <td><div class="col-xs-1"><a href="{{route('articles.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a> </div>
                                    <div class="col-xs-1">
                                      {{ Form::open(['route' => ['articles.destroy', $item->id], 'method' => 'delete']) }}
                                      <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                                      {{ Form::close() }}
                                    </div>  
                                </td>

                              </tr>
                              @endforeach
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop