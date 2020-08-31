@extends('backend.app')

@section('content')


 @include('backend.alert')
 
              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                  Produtos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('produto')}}"><i class="fa fa-product-hunt"></i> Produtos</a></li>
                  </ol>
                </section>

                <section class="content container-fluid"> 

                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                              {!! Form::open(['url' => 'produto','class' => 'form-horizontal']) !!}
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
                                        {!! Form::submit('Novo',['class' => 'btn btn-info pull-right']) !!}
                                    </div>
                            {!! Form::close() !!}
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
                                <th class="col-xs-1">#</th>
                                <th>Código Artigo</th>
                                <th>Titulo</th>
                                <th>Subtitulo</th>
                                <th>Ordem</th>
                                <th class="text-center">Active</th>
                                <th>#</th>
                              </tr>
                              @foreach($produto as $item)
                                <tr>
                                    <td class="col-xs-1"><img src="{{ $item->path }}" class="img-thumbnail"></td>
                                    <td>{{ $item->cod_art }}</td>
                                    <td>{{ $item->titulo }}</td>
                                    <td>{{ $item->subtitulo }}</td>
                                    <td>{{ $item->ordem }}</td>
                                    @if ($item->activo === 1)
                                        <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                    @else                       
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                    @endif   
                                    <td><div class="col-xs-1"><a href="{{route('produto.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> </div>
                                    <div class="col-xs-1">
                                        {{ Form::open(['route' => ['produto.destroy', $item->id], 'method' => 'delete']) }}
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
                  </div>
                </section>
              </div>

@stop