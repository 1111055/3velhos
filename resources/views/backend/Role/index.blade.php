@extends('backend.app')

@section('content')


 @include('backend.alert')
 
              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Regras
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('role')}}"><i class="fa fa-gavel"></i> Regras</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">     
        
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body table-responsive no-padding">

                            @if(Auth::user()->isinrule(['supermaster']))
                               <div class="panel panel-default">
                                  <div class="panel-body">
                                    <div class="col-xs-12">
                                      <div class="box box-info">

                                          {!! Form::open(['url' => 'role','class' => 'form-horizontal']) !!}
                                              <div class="box-body">
                                                <div class="form-group">
                                                  {!! Form::label('* Nome:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                  <div class="col-sm-3">
                                                     {!! Form::text('name',null,['class' => 'form-control']) !!}
                                                  </div>
                                                    {!! Form::label('Descrição:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                  <div class="col-sm-4">
                                                     {!! Form::text('description',null,['class' => 'form-control']) !!}
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
                              <th>Nome</th>
                              <th>Descrição</th>
                              <th>#</th>
                            </tr>
                            @foreach($roles as $item)
                              <tr>
                                <td> <a href="{{ route('role.show', $item->id)}}">{{ $item->id }}</a></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td><div class="col-xs-1"><a href="{{route('role.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> </div>
                                    <div class="col-xs-1">
                                        {{ Form::open(['route' => ['role.destroy', $item->id], 'method' => 'delete']) }}
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