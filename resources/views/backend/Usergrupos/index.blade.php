@extends('backend.app')

@section('content')


              @include('backend.alert')

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                  Expressoes
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('expressoes')}}"><i class="fa fa-y-combinator"></i> Expressoes</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box">
                                  <div class="box-header">
                                   <div class="panel panel-default">
                                      <div class="panel-body">
                                        <div class="col-xs-12">
                                          <div class="box box-info">
                                            {!! Form::open(['url' => 'expressoes','class' => 'form-horizontal']) !!}
                                                  <div class="box-body">
                                                    <div class="form-group">
                                                      {!! Form::label('* Expressão:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-4">
                                                         {!! Form::text('expression',null,['class' => 'form-control']) !!}
                                                      </div>
                                                        {!! Form::label('Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-4">
                                                         {!! Form::text('desc',null,['class' => 'form-control']) !!}
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="box-footer">
                                                      {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                  </div>
                                          {!! Form::close() !!}
                                            </div>
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
                                    <div class="box-body table-responsive no-padding">
                                      <table class="table table-hover">
                                        <tr>
                                          <th>#</th>
                                          <th>Expressão</th>
                                          <th>Descricao</th>
                                          <th>#</th>
                                        </tr>
                                        @foreach($exp as $item)
                                          <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->expression }}</td>
                                            <td>{{ $item->descricao }}</td>
                                            <td><div class="col-xs-1"><a href="{{route('expressoes.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> </div>
                                                <div class="col-xs-1">
                                                    {{ Form::open(['route' => ['expressoes.destroy', $item->id], 'method' => 'delete']) }}
                                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                    {{ Form::close() }}
                                                </div>   
                                            </td>
                                          </tr>
                                          @endforeach
                                      </table>
                                    </div>
                               </div>
                             </div>
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop