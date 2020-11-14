@extends('backend.app')

@section('content')


<style>
/* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


</style>
              @include('backend.alert')

              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                   Editar Página
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('pagina')}}"><i class="fa fa-align-justify"></i> Paginas</a></li>
                    <li><a href="{{route('pagina.edit', $pagina->id)}}"><i class="fa fa-align-justify"></i> Editar Pagina</a></li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                        
                          <div class="col-lg-12 col-sm-12">
                              <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                      <button type="button" id="stars" class="btn btn-warning" href="#tab1" data-toggle="tab"><span class="fa fa-edit" aria-hidden="true"></span>
                                          <div class="hidden-xs">Editar Página</div>
                                      </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                      <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-bullseye" aria-hidden="true"></span>
                                          <div class="hidden-xs">Listas Dados</div>
                                      </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                      <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="fa fa-plus-square" aria-hidden="true"></span>
                                          <div class="hidden-xs">Plugins</div>
                                      </button>
                                  </div>
                              </div>

                             <div class="well">
                                <div class="tab-content">
                                  <div class="tab-pane fade in active" id="tab1">
                                      <div class="box box-info">
                                             {!! Form::model($pagina, [
                                                  'method' => 'PUT',
                                                  'route' => ['pagina.update', $pagina->id],
                                                  'class' => 'form-horizontal',
                                                   'files' => true
                                             ]) !!}
                                            <div class="box-body">
                                              <div class="form-group">
                                                {!! Form::label('* Nome:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('nome',$pagina->nome,['class' => 'form-control']) !!}
                                                </div>
                                                
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('titulo',$pagina->titulo,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                               <div class="form-group">
                                                  {!! Form::label('Subtitulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('subtitulo',$pagina->subtitulo,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Descrição:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::textarea('descricao',$pagina->descricao,['class' => 'form-control', 'id' => 'descricao']) !!}
                                                </div>
                                               </div>
                                               <div class="form-group">
                                                   {!! Form::label('Novo Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('titulo1',$pagina->titulo1,['class' => 'form-control']) !!}
                                                 </div>
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Nova Descrição:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::textarea('descricao1',$pagina->descricao1,['class' => 'form-control']) !!}
                                                 </div>
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Novo Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('titulo2',$pagina->titulo2,['class' => 'form-control']) !!}
                                                 </div>
                                               </div>
                                               <div class="form-group">
                                                   {!! Form::label('Nova Descrição:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::textarea('descricao2',$pagina->descricao2,['class' => 'form-control']) !!}
                                                 </div>
                                               </div>
                                              <div class="form-group">
                                                   {!! Form::label('Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('link',$pagina->link,['class' => 'form-control']) !!}
                                                 </div>
                                               </div>

                                              <div class="form-group">
                                                   {!! Form::label('Novo Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                 <div class="col-sm-8">
                                                   {!! Form::text('link1',$pagina->link1,['class' => 'form-control']) !!}
                                                 </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-2">
                                                   {!! Form::checkbox('activo',1,$pagina->activo) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Class:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-2">
                                                   {!! Form::text('class',$pagina->class,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                               <div class="form-group">
                                                  {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-2">
                                                   {!! Form::text('ordem',$pagina->ordem,['class' => 'form-control']) !!}
                                                </div>
                                              </div>

                                             <div class="form-group">
                                                    <label class="col-sm-2 control-label">Imagem (1920x1079)</label>
                                                    <div class="col-sm-8">
                                                     <input type="file" name="banerimg" id="exampleInputImage" class="image"> 
                                                   </div>
                                             </div>
                                             <div class="form-group col-xs-12">
                                                     <p><div id="fileDisplayArea"></div></p>
                                                     <div class="col-xs-2">
                                                          <img src="{{$pagina->pathimg}}" style="max-width: 200%;" />
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="box-footer">
                                                {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                            </div>
                                          {!! Form::close() !!}
                                      </div>
                                  </div>
                                  <div class="tab-pane fade in" id="tab2">
                                     <div class="panel-body">


                                              <div class="box box-info">
                                                {!! Form::open(['url' => 'desc','class' => 'form-horizontal']) !!}
                                                      <div class="box-body">
                                                           {!! Form::hidden('idpage',$pagina->id,['class' => 'form-control']) !!}
                                                        <div class="form-group">
                                                          {!! Form::label('Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                          <div class="col-sm-2">
                                                             {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                                          </div>
                                                             {!! Form::label('Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                          <div class="col-sm-2">
                                                             {!! Form::text('descricaodesc',null,['class' => 'form-control']) !!}
                                                          </div>
                                                             {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                          <div class="col-sm-2">
                                                             {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                                          </div>

                                                        </div>

                                                      </div>
                                                      <div class="box-footer">
                                                          {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                      </div>
                                              {!! Form::close() !!}
                                                </div>
                                               @if(count($desc) > 0)
                                                 <div class="box">
                                                  <div class="box-body table-responsive no-padding">
                                                    <table class="table table-hover">
                                                      <tr>
                                                        <th>#</th>
                                                        <th>Titulo</th>
                                                        <th>Decrição</th>
                                                        <th>Ordem</th>
                                                        <th>Ativo</th>
                                                         <th>#</th>
                                                      </tr>
                                                      @foreach ($desc as $item)   
                                                        <tr>
                                                          <td>#</td>
                                                          <td>{{ $item->titulo }}</td>
                                                          <td>{{ $item->descricao }}</td>
                                                          <td>{{ $item->ordem }}</td>
                                                           @if ($item->activo === 1)
                                                                <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                                           @else                       
                                                                <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                                           @endif   
                                                           <td><a href="{{route('desc.edit',[$item->id,$pagina->id])}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>  

                                  
                                                       {{ Form::open(['route' => ['desc.destroy', $item->id,$pagina->id ], 'method' => 'delete']) }}
                                                           <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                        {{ Form::close() }}
                                
                                                          </td>
                                                        </tr>
                                                      @endforeach
                                                    </table>
                                                  </div>
                                                </div>
                                                @endif

                                      </div>
                                 </div>

                                </div>
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