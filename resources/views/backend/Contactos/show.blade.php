@extends('backend.app')

@section('content')


 @include('backend.alert')

        
              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                    Pedidos Contactos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('contactos')}}"><i class="fa fa-phone"></i> Contactos</a></li>
                    <li class="active"><a href="{{route('contactos.show',$contactos->id)}}"><i class="fa fa-phone"></i> Detalhe Contacto</a></li>
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
                                <li class="list-group-item">Nome: {{ $contactos->nome}}</li>
                                <li class="list-group-item">Email: {{ $contactos->email}}</li>
                                <li class="list-group-item">Assunto: {{ $contactos->assunto}}</li>
                                <li class="list-group-item">Descricao: {{ $contactos->message}}</li>
                                <li class="list-group-item">Data: {{ $contactos->created_at}}</li>
                              </ul>
                             <div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop