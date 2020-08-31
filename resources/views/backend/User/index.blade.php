@extends('backend.app')

@section('content')


 @include('backend.alert')
 

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Utilizadores
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-users"></i> Utilizadores</a></li>
                  </ol>
                </section>

                <section class="content container-fluid">             
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="box">
                              <div class="box-header">
                               <div class="panel panel-default">
                                  <div class="panel-body">
                                    <div class="col-xs-12">
                                      <div class="box box-info">
                                            {!! Form::open(['url' => 'user','class' => 'form-horizontal', 'onsubmit' => 'return validateform(this);']) !!}
                                              <div class="box-body">
                                                    <div class="col-xs-4">
                                                       <div class="form-group col-xs-12">
                                                         {!! Form::label('* Nome ') !!}
                                                         {!! Form::text('name',null,['class' => 'form-control', 'require' => 1]) !!}
                                                         <span class="text-danger" style="display: none;"></span>
                                                       </div>
                                                    </div>
                                                   <div class="col-xs-8">
                                                      <div class="form-group col-xs-12">
                                                        {!! Form::label('* Email:')!!}
                                                        {!! Form::text('email',null,['class' => 'form-control', 'require' => 1, 'email' => 1]) !!}
                                                        <span class="text-danger" style="display: none;"></span>
                                                      </div>
                                                   </div>
                                                   <div class="col-xs-12">
                                                      <div class="form-group col-xs-12">
                                                        {!! Form::label('* PassWord:')!!}
                                                        {!! Form::password('password',null,['class' => 'form-control', 'require' => 1]) !!}
                                                        <span class="text-danger" style="display: none;"></span>
                                                        {!! Form::label('* Confirmar Password:')!!}
                                                        {!! Form::password('passwordconfirme',null,['class' => 'form-control', 'require' => 1]) !!}
                                                         <span class="text-danger" style="display: none;"></span>
                                                      </div>
                                                   </div>

                                              </div>
                                              * Campo Obrigatório.
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
                                    <th>Nome</th>
                                    <th>Email</th>

                                    <th class="text-center">Active</th>
                                  </tr>
                                   @foreach($users as $item)
                                    @if(!$item->isinrule(['supermaster']))
                                        <tr>
                                          <td>#</td>
                                          <td>{{ $item->nome }}</td>
                                          <td>{{ $item->email }}</td>

                                          @if ($item->activo === 1)
                                              <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                          @else                       
                                          <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                          @endif   
                                          <td><div class="col-xs-1"><a href="{{route('user.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> </div>
                                              <div class="col-xs-1">
                                                  {{ Form::open(['route' => ['user.destroy', $item->id], 'method' => 'delete']) }}
                                                  <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                  {{ Form::close() }}
                                              </div>
                                          </td>
                                        </tr>
                                     @endif   
                                    @endforeach
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                </section>
              </div>

@stop