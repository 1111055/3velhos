@extends('backend.app')

@section('content')


              @include('backend.alert')
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                Listas MailChimp
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('mailchimp.lista')}}"><i class="fa fa-circle-o"></i> Listas</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
                      <div class="row">
                          <div class="col-xs-12">
                            <div class="box">
                              <div class="box-header">
                               <div class="panel panel-default">
                                  <div class="panel-body">
                                    <div class="col-xs-12">
                                      <div class="box box-info">
                                        {!! Form::open(['url' => 'categoria','class' => 'form-horizontal']) !!}
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
                              <div class="box-header">
                                <div class="box-body table-responsive no-padding">
                                  <table class="table table-hover">
                                    <tr>
                                      <th>#</th>
                                      <th>ID</th>
                                      <th>Nome</th>
                                      <th>Data</th>
                                      <th>Contactos</th>
                                      <th>Removidos</th>
                                      <th>Adicionar contacto</th>

                                    </tr>
                                    @foreach($lis as $item)
                                      <tr>
                                        <td>#</td>
                                        <td><a href="{{route('mailchimp.listdetail',[$item['id']])}}">{{ $item['id'] }}</a></td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ date('d M Y', strtotime( $item['date_created'])) }}</td>
                                        <td>{{ $item['stats']['member_count'] }}</td>
                                        <td>{{ $item['stats']['unsubscribe_count'] }}</td>
                                        <td><i class="fa fa-plus-circle"></i></td>
                                      </tr>
                                      @endforeach
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                       </div>
                </section>
              </div>

@stop