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
                    <li class="active"><a href="{{route('mailchimp.lista')}}"><i class="fa fa-circle-o"></i> Detalhe Lista</a></li>
                  </ol>
                </section>
                                <!-- Main content -->
                <section class="content container-fluid">             
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">

                       <div class="col-xs-12">
                          <div class="panel panel-default">
                            <div class="panel-body">
                             <div class="col-xs-6">
                              <ul class="list-group">
                                <li class="list-group-item">Id: {{ $list['id']}}</li>
                                <li class="list-group-item">Nome: {{ $list['name']}}</li>
                                <li class="list-group-item">data Criação: {{  date('d M Y', strtotime( $list['date_created'])) }}</li>
                                <li class="list-group-item">Contactos: {{ $list['stats']['member_count'] }}</li>
                                <li class="list-group-item">Removidos: {{ $list['stats']['unsubscribe_count'] }}</li>                                
                              </ul>
                             <div>
                            </div>
                          </div>
                          <div class="col-xs-6">
                              <ul class="list-group">
                                 <li class="list-group-item">Campanhas Associadas: {{ $list['stats']['campaign_count'] }}</li>
                                 <li class="list-group-item">Campanhas Vistas:     {{  number_format($list['stats']['open_rate'], 2) }} %</li>
                                
                              </ul>
                             <div>
                            </div>
                          </div>
                        </div>
                    <div class="panel panel-default">
                      <div class="panel-body">
                       <div class="col-xs-12">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Nome</th>
                              <th>Morada</th>
                              <th>Contacto</th>
                              <th>Data Inserido</th>
                            </tr>

                             @foreach($listmembers as $item)
                              <tr>
                                <td>#</td>
                                <td><a href="{{route('mailchimp.listdetail',[$item['id']])}}">{{ $item['email_address'] }}</a></td>
                                <td>{{ $item['merge_fields']['FNAME']}} {{ $item['merge_fields']['LNAME'] }}</td>
                                <td></td>
                                 <td>{{ $item['merge_fields']['PHONE'] }}</td>
                                <td>{{ date('d M Y', strtotime( $item['timestamp_opt'])) }}</td>
                               
                                <td><i class="fa fa-plus-circle"></i></td>
                              </tr>
                              @endforeach

                            
                          </table>
                        </div>
                        </div>
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>

                </section>
                <!-- /.content -->

              </div>

@stop