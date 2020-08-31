@extends('backend.app')

@section('content')

 @include('backend.alert')


              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                  Redes Sociais
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fab fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('social')}}"><i class="fab fa-facebook-square"></i>  Redes Social</a></li>
                    <li class="active"><a href="{{route('social.edit', $social->id)}}"><i class="fab fa-facebook-square"></i>  Editar Rede Social</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="box box-info">
                                     {!! Form::model($social, [
                                          'method' => 'PUT',
                                          'route' => ['social.update', $social->id],
                                          'class' => 'form-horizontal'
                                     ]) !!}
                                    <div class="box-body">
                                      <div class="form-group">
                                        {!! Form::label('* Nome:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('nome',$social->nome,['class' => 'form-control']) !!}
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                           {!! Form::label('* Menomonica:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('menomonica',$social->menomonica,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                       <div class="form-group">
                                          {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('ordem',$social->ordem,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('* Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('link',$social->link,['class' => 'form-control']) !!}
                                        </div>
                                       </div>
                                       <div class="form-group">
                                           {!! Form::label('* Class:',null, ['class' => 'col-sm-2 control-label']) !!}
                                         <div class="col-sm-8">
                                           {!! Form::text('class',$social->class,['class' => 'form-control']) !!}
                                         </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-4">
                                           {!! Form::checkbox('activo',1,$social->activo) !!}
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