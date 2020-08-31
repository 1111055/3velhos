@extends('backend.app')

@section('content')



 @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                   Páginas
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-align-justify"></i> Paginas</a></li>
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
                                              <div class="col-xs-12">
                                                <div class="box box-info">
                                                  {!! Form::open(['url' => 'pagina','class' => 'form-horizontal']) !!}
                                                        <div class="box-body">
                                                         <div class="form-group col-xs-6">
                                                                 {!! Form::label('* Nome ') !!}
                                                                 {!! Form::text('nome',null,['class' => 'form-control']) !!}
                                                              </div>
                                                              <div class="form-group col-xs-6">
                                                                {!! Form::label('Titulo:')!!}
                                                                {!! Form::text('titulo',null,['class' => 'form-control']) !!}
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
                                          <th>id</th>
                                          <th>Nome</th>
                                          <th>Titulo</th>
                                          <th>Subtitulo</th>
                                          <th class="text-center">Active</th>
                                          <th>#</th>
                                        </tr>
                                         @foreach($pagina as $item)
                                          <tr>
                                            <td><i class="{{ $item->class }}"></i></td>
                                              <td>{{ $item->id }}</td>
                                            <td>{{ $item->nome }}</td>
                                            <td>{{ $item->titulo }}</td>
                                            <td>{{ $item->subtitulo }}</td>
                                            <td>{{ $item->menomonica }}</td>
                                            @if ($item->activo === 1)
                                                <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                            @else                       
                                            <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                            @endif   
                                            <td><div class="col-xs-1"><a href="{{route('pagina.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> </div>
                                                <div class="col-xs-1">
                                                    @if(Auth::user()->isinrule(['supermaster']))    
                                                        {{ Form::open(['route' => ['pagina.destroy', $item->id], 'method' => 'delete']) }}
                                                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                        {{ Form::close() }}
                                                    @endif    
                                                </div>      
                                            </td>
                                          </tr>
                                          @endforeach
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>

                </section>
          </div>
@stop