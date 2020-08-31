@extends('backend.app')

@section('content')


              @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                  Newsletter
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('newsletter')}}"><i class="fa fa-newspaper-o"></i> Newsletter</a></li>
                  </ol>
                </section>

                <section class="content container-fluid">             
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Data</th>
                              <th class="text-center">Active</th>
                            </tr>
                            @foreach($newsletter as $item)
                              <tr>
                                <td>#</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->created_at }}</td>
                                @if ($item->activo === 1)
                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                @else                       
                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                @endif   
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