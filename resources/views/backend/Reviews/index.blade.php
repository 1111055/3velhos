@extends('backend.app')

@section('content')


              @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                  Reviews
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('review')}}"><i class="fas fa-comments"></i> Reviews</a></li>
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
                              <th>Nome</th>
                              <th>Email</th>
                              <th>Website</th>
                              <th>Comentário</th>
                              <th>Artigo</th>
                              <th>Aprovado</th>
                              <th>#</th>
                              <th>#</th>
                            </tr>
                            @foreach($reviews as $item)
                              <tr>
                                <td>#</td>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->website }}</td>
                                <td>{{ $item->comentario }}</td>
                                @if($item->artigo != null)
                                <td>{{ $item->artigo->title }}</td>
                                @else
                                <td></td>
                                @endif
                                <td><div class="">{{ $item->aprovado }} </div></td>
                                <td><div class="col-xs-1"> <button class="btn btn-primary aprovar"  csrf="{{csrf_token()}}" url="{{route('review.aprovar',[$item->id])}}" idreview="{{$item->id}}">Aprovar</button></div></td>

                                <td>
                                    <div class="col-xs-1">
                                      {{ Form::open(['route' => ['review.destroy', $item->id], 'method' => 'delete']) }}
                                      <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
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


@section('scripts')

        <script>

                $('.aprovar').on('click', function(){
                  var url = $(this).attr('url');
                  var id  = $(this).attr('idreview');
                  $.post(url, { _token: "{{ csrf_token() }}"}, 
                        function(returnedData){
                             if(returnedData == 0){

                                location.reload();
                                
                             }
                    });

                });


   


             
        </script>
@stop