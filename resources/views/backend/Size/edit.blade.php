@extends('backend.app')

@section('content')
 @include('backend.alert')


              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                  Edit Tamanhos
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('size')}}"><i class="fa fa-facebook-square"></i> Tamanhos</a></li>
                    <li class="active"><a href="{{route('size.edit',$size->id)}}"><i class="fa fa-facebook-square"></i> Editar Tamanhos</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">

                          </div>
                          <!-- /.box-header -->
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <!-- Horizontal Form -->
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                     {!! Form::model($size, [
                                          'method' => 'PUT',
                                          'route' => ['size.update', $size->id],
                                          'class' => 'form-horizontal'
                                     ]) !!}
                                    <div class="box-body">
                                      <div class="form-group">
                                        {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('titulo',$size->titulo,['class' => 'form-control']) !!}
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                           {!! Form::label('Subtitulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('subtitulo',$size->subtitulo,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                       <div class="form-group">
                                          {!! Form::label('Tamanho:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('tamanho',$size->tamanho,['class' => 'form-control']) !!}
                                          
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('ordem',$size->ordem,['class' => 'form-control']) !!}
                                        </div>
                                       </div>
                                        <div class="form-group">
                                            {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                          <div class="col-sm-2">
                                             {!! Form::checkbox('activo',1,$size->activo) !!}
                                          </div>
                                        </div>


                                    </div>
                                    <div class="box-footer">
                                        {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                    </div>
                                  {!! Form::close() !!}
                              </div>
                            </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>
                     </div>
                  </div>

                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

@stop
@section('scripts')
  <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
  <script>
          $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
           CKEDITOR.replace('descricao')
           CKEDITOR.replace('descricao1')
           CKEDITOR.replace('descricao2')
    
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })

          $(document).ready(function() {
              $(".btn-pref .btn").click(function () {
                  $(".btn-pref .btn").removeClass("btn-warning").addClass("btn-default");
                  // $(".tab").addClass("active"); // instead of this do the below 
                  $(this).removeClass("btn-default").addClass("btn-warning");   
              });
          });

         $("#add").on('click', function () {
               
                 var html = '<input type="text" name="titulo[]" id="titulo" class="form-control" /> <input type="text" name="titulo[]" id="titulo" class="form-control" /> </br>';
           

                  $(".addlines").append(html);


          });


      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
  </script>

@stop