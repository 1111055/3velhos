@extends('backend.app')

@section('content')


              @include('backend.alert')
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Editar Grupo
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('grupos')}}"><i class="fa fa-circle-o"></i> Grupos</a></li>
                    <li><a href="{{route('grupos.edit', $grupos->id)}}"><i class="fa fa-circle-o"></i> Editar Grupo</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                        
                             <div class="col-lg-12 col-sm-12">

                                   <div class="well">
                                      <div class="tab-content">
                                            <div class="box box-info">
                                               {!! Form::model($grupos, [
                                                        'method' => 'PUT',
                                                        'route' => ['grupos.update', $grupos->id],
                                                        'class' => 'form-horizontal',
                                                        'files' => true
                                                   ]) !!}
                                                  <div class="box-body">
                                                    <div class="form-group">
                                                      {!! Form::label('* Nome:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-8">
                                                         {!! Form::text('nome',$grupos->nome,['class' => 'form-control']) !!}
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                  <div class="box-footer">
                                                      {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                  </div>
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="box box-info table-responsive no-padding">
                                                  <div class="col-xs-1">
                                              <button class="btn btn-info btn-sm" id="insertnew"><i class="fa fa-plus-circle"></i></button>
                                            </div><h3>Utilizadoes deste Grupo </h3> 
                                              <table class="table table-hover">
                                                <tr>
                                                  <th>#</th>
                                                  <th>Utilizador</th>
                                                  <th>#</th>
                                                </tr>
                                                
                                               
                                                 @foreach($grupos->usergrupos as $item)
                                                  <tr>
                                                    <td>#</td>
                                                    <td>{{ $item->user_id }}</td>
                                                    <td>
                                                      <div class="col-xs-1">
                                                          {{ Form::open(['route' => ['usergrupos.destroy', $item->id], 'method' => 'delete']) }}
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
                        </div>
                      </div>
                     </div>

                </section>
              </div>

                            <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <form name="formsendaposta" method="POST" action="{{route('usergrupos')}}">
                            <div class="modal-body">
                                 <input type="hidden" name="grupo_id" value="{{$grupos->id}}">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  
                                  <label  for="exampleFormControlSelect1">Player</label>
                                  <input  class="form-control" name="user_id" />
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>



@stop

@section('scripts')
<script type="text/javascript">
  

  $(document).ready(function() {
    
  });

  $('#insertnew').on('click', function(){

    $('#exampleModal').modal('toggle');

  });

  $("form[name='formsendaposta']").submit(function (e) {
    e.preventDefault();

    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission

        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data
        }).done(function (response) {

       

          setTimeout(function(){ 

                

           }, 1500);
            
        });
    
});
</script>

@stop
