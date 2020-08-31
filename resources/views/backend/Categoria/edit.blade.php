@extends('backend.app')

@section('content')


              @include('backend.alert')

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                   Editar Categoria
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li ><a href="{{route('categoria')}}"><i class="fa fa-circle-o"></i> Categorias</a></li>
                    <li class="active"><a href="{{route('categoria.edit', $categoria->id)}}"><i class="fa fa-circle-o"></i> Editar Categoria</a></li>
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
                                                   {!! Form::model($categoria, [
                                                        'method' => 'PUT',
                                                        'route' => ['categoria.update', $categoria->id],
                                                        'class' => 'form-horizontal',
                                                        'files' => true
                                                   ]) !!}
                                                  <div class="box-body">
                                                    <div class="form-group">
                                                      {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-8">
                                                         {!! Form::text('titulo',$categoria->titulo,['class' => 'form-control']) !!}
                                                      </div>
                                                      
                                                    </div>
                                                    <div class="form-group">
                                                      {!! Form::label('* SubTitulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-8">
                                                         {!! Form::text('subtitulo',$categoria->subtitulo,['class' => 'form-control']) !!}
                                                      </div>
                                                      
                                                    </div>
                                                     <div class="form-group">
                                                        {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-8">
                                                         {!! Form::text('ordem',$categoria->ordem,['class' => 'form-control']) !!}
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                      <div class="col-sm-4">
                                                         {!! Form::checkbox('activo',1,$categoria->activo) !!}
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="box-footer">
                                                      {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                  </div>
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="box box-info table-responsive no-padding">
                                              <h3>Sub Categorias</h3> 
                                              <table class="table table-hover">
                                                <tr>
                                                  <th>#</th>
                                                  <th>Titulo</th>
                                                  <th class="text-center">Active</th>
                                                </tr>
                                                
                                                  @foreach($categoria->subcategoria as $item)
                                                  <tr>
                                                    <td>#</td>
                                                    <td>{{ $item->titulo }}</td>
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