@extends('backend.app')

@section('content')


              @include('backend.alert')

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                  Cores
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('color')}}"><i class="fa fa-paint-brush"></i> Cores</a></li>
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
                                            {!! Form::open(['url' => 'color','class' => 'form-horizontal']) !!}
                                                  <div class="box-body">
                                                    <div class="form-group">
                                                      {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-4">
                                                         {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                                      </div>
                                                        {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-4">
                                                         {!! Form::text('ordem',null,['class' => 'form-control']) !!}
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
                                          <th>Titulo</th>
                                          <th>Subtitulo</th>
                                          <th>Cor</th>
                                          <th>Ordem</th>
                                          <th class="text-center">Active</th>
                                          <th>#</th>
                                        </tr>
                                        @foreach($color as $item)
                                          <tr>
                                            <td>#</td>
                                            <td>{{ $item->titulo }}</td>
                                            <td>{{ $item->subtitulo }}</td>
                                            <td>{{ $item->cor }}</td>
                                            <td>{{ $item->ordem }}</td>
                                            @if ($item->activo === 1)
                                                <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                            @else                       
                                            <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                            @endif   
                                            <td><div class="col-xs-1"><a href="{{route('color.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> </div>
                                                <div class="col-xs-1">
                                                    {{ Form::open(['route' => ['color.destroy', $item->id], 'method' => 'delete']) }}
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