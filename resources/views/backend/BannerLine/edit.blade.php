@extends('backend.app')

@section('content')


              @include('backend.alert')

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Editar Banner
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('banner')}}"><i class="fa fa-sliders"></i> Banner</a></li>
                     <li><a href="{{route('banner.edit',$bannerlines->idbannner)}}"><i class="fa fa-sliders"></i>Editar  Banner</a></li>
                    <li><a href="{{route('bannerlines.edit',$bannerlines->id)}}"><i class="fa fa-sliders"></i> Editar Imagens</a></li>
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
                                             {!! Form::model($bannerlines, [
                                                  'method' => 'PUT',
                                                  'route' => ['bannerlines.update', $bannerlines->id],
                                                  'class' => 'form-horizontal',
                                                  'files' => true
                                             ]) !!}
                                            <div class="box-body">
                                              <div class="form-group">
                                                  {!! Form::hidden('idbanner',$bannerlines->idbannner,['class' => 'form-control']) !!}
                                                {!! Form::label('Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('titulo',$bannerlines->titulo,['class' => 'form-control']) !!}
                                                </div>
                                                
                                              </div>
                                              <div class="form-group">
                                                {!! Form::label('* SubTitulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('subtitulo',$bannerlines->subtitulo,['class' => 'form-control']) !!}
                                                </div>
                                                
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::textarea('descricao',$bannerlines->descricao,['class' => 'form-control', 'id' => 'descricao']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('link',$bannerlines->link,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                               <div class="form-group">
                                                  {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('ordem',$bannerlines->ordem,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                   {!! Form::checkbox('activo',1,$bannerlines->activo) !!}
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label>Imagem ({{$width}}x{{$height}})</label>
                                                     <input type="file" name="banerimg" id="exampleInputImage" class="image"> 
                                                </div>
                                                <div class="col-xs-12">
                                                <p><div id="fileDisplayArea"></div></p>
                                                    <div class="col-xs-2">
                                                          <img src="{{$bannerlines->path}}" style="max-width: 200%;" />
                                                    </div>
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
                        <!-- /.box -->
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