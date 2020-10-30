@extends('backend.app')

@section('content')


              @include('backend.alert')

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                  Grupos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('grupos')}}"><i class="fa fa-users"></i> Grupos</a></li>
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
                                            {!! Form::open(['url' => 'grupos','class' => 'form-horizontal']) !!}
                                                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                                  <div class="box-body">
                                                    <div class="form-group">
                                                      {!! Form::label('* Nome:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-4">
                                                         {!! Form::text('nome',null,['class' => 'form-control']) !!}
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
                                          <th>nome</th>
                                           <th>User</th>
                                          <th>#</th>
                                        </tr>
                                        @foreach($grupos as $item)
                                          <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nome }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td><div class="col-xs-1"><a href="{{route('grupos.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> </div>
                                                <div class="col-xs-1">
                                                    {{ Form::open(['route' => ['grupos.destroy', $item->id], 'method' => 'delete']) }}
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