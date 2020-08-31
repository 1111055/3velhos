@extends('backend.app')

@section('content')



    <style type="text/css">
      
      img {
          max-width: 100%;
        }

        #fileDisplayArea {
          margin-top: 2em;
          width: 100%;
          overflow-x: auto;
        }

    </style>

               @include('backend.alert')
    


              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Settings
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="{{route('setting')}}"><i class="fa fa-wrench"></i> Settings</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                 <div class="row justify-content-md-center">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Settings</h3>

                         <div class="panel panel-default">
                            <div class="panel-body">
                            {!! Form::model($setting, [
                                  'method' => 'PUT',
                                  'route' => ['setting.update', $setting->id],
                                  'class' => 'form-horizontal',
                                  'files' => true
                             ]) !!}
                              <div class="col-xs-4">
                                <div class="box box-info">
                                        <div class="box-body">

                                              <div class="form-group">
                                                 {!! Form::label('Nome ') !!}
                                                 {!! Form::text('nome',$setting->nome,['class' => 'form-control']) !!}
                                              </div>
                                              <div class="form-group">
                                                {!! Form::label('Contacto:')!!}
                                                {!! Form::text('contacto1',$setting->contacto1,['class' => 'form-control']) !!}
                                              </div>
                                              <div class="form-group">
                                                {!! Form::label('Contacto:') !!}
                                                {!! Form::text('contacto2',$setting->contacto2,['class' => 'form-control']) !!}
                                              </div>
                                            
                                              <div class="form-group">
                                                {!! Form::label('Email:') !!}
                                                {!! Form::text('email1',$setting->email1,['class' => 'form-control']) !!}
                                              </div>
                                              <div class="form-group">
                                                {!! Form::label('Email:') !!}
                                                {!! Form::text('email2',$setting->email2,['class' => 'form-control']) !!}
                                              </div>
                                              <div class="form-group">
                                                {!! Form::label('Website:') !!}
                                                {!! Form::text('website',$setting->website,['class' => 'form-control']) !!}
                                              </div>
                                              <div class="form-group">

                                                 <input type="file" name="profile_image" id="exampleInputImage" class="image">
                                              

                                                 <div class="col-xs-12">
                                                    <p><div id="fileDisplayArea"></div></p>
                                                    @if(session('path'))
                                                        <img src="{{ session('path') }}" />
                                                    @endif
                          													@if(file_exists('logotipo/CROP/logotipo.png'))
                          														<img src="logotipo/CROP/logotipo.png" />
                          													@endif
                                               </div> 
                                              </div>
                                               
                                                                     
                                       </div>

                                  </div>
                                </div>
                                 <div class="col-xs-4">
                                      <div class="box box-info">
                                              <div class="box-body">
                                                   <div class="form-group">
                                                      {!! Form::label('Rua:') !!}
                                                      {!! Form::text('rua',$setting->rua,['class' => 'form-control']) !!}
                                                    </div>
                                                   <div class="form-group">
                                                      {!! Form::label('Localidade:') !!}
                                                      {!! Form::text('localidade',$setting->localidade,['class' => 'form-control']) !!}
                                                    </div>
                                                   <div class="form-group">
                                                      {!! Form::label('Cidade:') !!}
                                                      {!! Form::text('cidade',$setting->cidade,['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                      {!! Form::label('Codigo Postal:') !!}
                                                      {!! Form::text('codigopostal',$setting->codigopostal,['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                      {!! Form::label('Latitude:') !!}
                                                      {!! Form::text('latitude',$setting->latitude,['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                      {!! Form::label('Longitude:') !!}
                                                      {!! Form::text('longitude',$setting->longitude,['class' => 'form-control']) !!}
                                                    </div>
                                                     
                                                   <div class="box-footer">
                                                      {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                  </div>
                                                                  
                                             </div>

                                        </div>
                                    </div>
                                 {!! Form::close() !!}     

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