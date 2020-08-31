@extends('backend.app')

@section('content')


              @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                   Contactos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('contactos')}}"><i class="fa fa-phone"></i> Contactos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">     
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Nome</th>
                              <th>Email</th>
                              <th>Assunto</th>
                              <th>Descrição</th>
                              <th>Data</th>
                            </tr>
                            @foreach($contactos as $item)
                              <tr>
                                <td> <a href="{{ route('contactos.show', $item->id)}}">{{ $item->id }}</a></td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->assunto }}</td>
                                <td>{{ $item->message }}</td>
                                <td>{{ $item->created_at }}</td>
                              </tr>
                              @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop