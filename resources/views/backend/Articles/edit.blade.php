@extends('backend.app')

@section('content')

              @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                   Editar Noticias
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('articles.list')}}"><i class="fa fa-align-justify"></i> Noticias</a></li>
                    <li><a href="{{route('articles.edit', $article->id)}}"><i class="fa fa-align-justify"></i> Editar Noticias</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="box box-info">
                                     {!! Form::model($article, [
                                          'method' => 'PUT',
                                          'route' => ['articles.update', $article->id],
                                          'class' => 'form-horizontal',
                                                  'files' => true
                                     ]) !!}
                                    <div class="box-body">
                                      <div class="form-group">
                                        {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('title',$article->title,['class' => 'form-control']) !!}
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                           {!! Form::label('* Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                          {!! Form::textarea('descricao',$article->body,['class' => 'form-control', 'id' => 'descricao']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('* Categoria:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                         

                                              {!! Form::select('category', $selcat,$article->category,['class' => 'form-horizontal']) !!}

                                        </div>
                                       </div>
                                       <div class="form-group">
                                          {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('ordem',$article->ordem,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('* Fonte:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('fonte',$article->fonte,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-4">
                                           {!! Form::checkbox('activo',1,$article->activo) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('Enviar email:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-4">
                                           <input type="checkbox" class="form-check-input" name="emailcheck" id="exampleCheck1">
                                        </div>
                                      </div>





                                      <div class="form-group">
                                              <label class="col-sm-2 control-label">Imagem (775x515)</label>
                                              <div class="col-sm-8">
                                               <input type="file" name="banerimg" id="exampleInputImage" class="image"> 
                                             </div>
                                       </div>
                                       <div class="form-group col-xs-12">
                                               <p><div id="fileDisplayArea"></div></p>
                                               <div class="col-xs-2">
                                                    <img src="{{$article->path}}" style="max-width: 200%;" />
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


      $('#exampleCheck1').on('click', function (){



            if ($('#exampleCheck1').is(':checked')) {

               
               $('#emailshow').show();
            }else{
              $('#emailshow').hide();
            }

      });


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