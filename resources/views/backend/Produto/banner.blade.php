@extends('backend.app')

@section('content')


 @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Banners
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('banner')}}"><i class="fa fa-sliders"></i> Banners</a></li>
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
                                         {!! Form::open(['url' => 'banner','class' => 'form-horizontal']) !!}
                                            <div class="box-body">
                                                  <div class="col-xs-8">
                                                     <div class="form-group col-xs-10">
                                                       {!! Form::label('* Titulo ') !!}
                                                       {!! Form::hidden('produto',1,['class' => 'form-control']) !!}
                                                       {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                                     </div>
                                                  </div>
                                                 <div class="col-xs-4">
                                                    <div class="form-group col-xs-6">
                                                      {!! Form::label('Ordem:')!!}
                                                      {!! Form::text('ordem',null,['class' => 'form-control']) !!}
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
                              </div>
                          @endif
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
                              <th>Descrição</th>
                              <th>Width</th>
                              <th>Height</th>
                              <th>Ordem</th>
                              <th class="text-center">Active</th>
                            </tr>
                             @foreach($banner as $item)
                              <tr>
                                <td>#</td>
                                <td>{{ $item->titulo }}</td>
                                <td>{{ $item->descricao }}</td>
                                <td>{{ $item->width }}</td>
                                <td>{{ $item->height }}</td>
                                <td>{{ $item->ordem }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
                                <td><div class="col-xs-1"><a href="{{route('banner.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></div>
                                  <div class="col-xs-1"> 

                                      {{ Form::open(['route' => ['banner.destroy', $item->id], 'method' => 'delete']) }}
                                      <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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