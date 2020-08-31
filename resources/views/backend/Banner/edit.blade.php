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
    
img {
    max-width: 100%;
  }

  #fileDisplayArea {
    margin-top: 2em;
    width: 100%;
    overflow-x: auto;
  }

.dot {
  height: 25px;
  width: 25px;
  border-radius: 50%;
  display: inline-block;
}

</style>

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
                    <li><a href="{{route('banner')}}"><i class="fa fa fa-sliders"></i> Banners</a></li>
                    <li class="active"><a href="{{route('banner.edit',$banner->id)}}"><i class="fa fa-sliders"></i> Editar Banner</a></li>
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
                                          <div class="hidden-xs">Editar Banner</div>
                                      </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                      <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-image" aria-hidden="true">
                                      @if($banner->produto == 0)
                                        </span>
                                            <div class="hidden-xs">Imagens</div>
                                        </button>
                                      @endif
                                      @if($banner->produto == 1)
                                        </span>
                                            <div class="hidden-xs">Produtos</div>
                                        </button>
                                      @endif
                                  </div>
                              </div>

                             <div class="well">
                                <div class="tab-content">
                                  <div class="tab-pane fade in active" id="tab1">
                                      <div class="box box-info">
                                            {!! Form::model($banner, [
                                                  'method' => 'PUT',
                                                  'route' => ['banner.update', $banner->id],
                                                  'class' => 'form-horizontal'
                                             ]) !!}
                                            <div class="box-body">
                                              <div class="form-group">
                                                {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('titulo',$banner->titulo,['class' => 'form-control']) !!}
                                                </div>
                                                
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::textarea('descricao',$banner->descricao,['class' => 'form-control', 'id' => 'descricao']) !!}
                                                </div>
                                              </div>
                                              @if($banner->produto == 0 && Auth::user()->isinrule(['supermaster']))
                                                <div class="form-group">
                                                     {!! Form::label('Width:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::text('width',$banner->width,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Height:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::text('height',$banner->height,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>
                                              @endif
                                               <div class="form-group">
                                                  {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('ordem',$banner->ordem,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::checkbox('activo',1,$banner->activo) !!}
                                                </div>
                                              </div>
                                            </div>
                                            <div class="box-footer">
                                                {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                            </div>
                                          {!! Form::close() !!}
                                      </div>
                                  </div>
                                  <div class="tab-pane fade in" id="tab3">
                                     <div class="panel-body">
                                        <div class="box box-info">
                                           @if($banner->produto == 0)
                                                    {!! Form::open(['url' => 'bannerlines','class' => 'form-horizontal',  'files' => true]) !!}
                                                      <div class="box-body">
                                                        <div class="form-group">
                                                          {!! Form::hidden('idbannner',$banner->id) !!}
                                                          {!! Form::label('Titulo:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                          <div class="col-sm-3">
                                                             {!! Form::text('titulo',null,['class' => 'form-control']) !!}
                                                          </div>
                                                             {!! Form::label('Ordem:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                          <div class="col-sm-2">
                                                             {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                                          </div>
                                                          <div class="form-group col-sm-4">
                                                          <label>Imagem ({{$banner->width}}x{{$banner->height}})</label>
                                                           <input type="file" name="banerimg" id="exampleInputImage" class="image"> 
                                                          </div>
                                                          <div class="col-xs-12">
                                                             <p><div id="fileDisplayArea"></div></p>
                                                         </div> 
                                                        </div>

                                                      </div>
                                                      <div class="box-footer">
                                                          {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                      </div>
                                                    {!! Form::close() !!}
                                                    <h3>Imagens</h3>
                                                    <div class="box-body table-responsive no-padding">
                                                          <table class="table table-hover">
                                                             <tr>
                                                                <th>#</th>
                                                                <th class="col-xs-2">Imagem</th>
                                                                <th>Titulo</th>
                                                                <th>Ordem</th>
                                                                <th>#</th>
                                                             </tr>
                                                            @if(count($bannerLine) > 0)
                                                              @foreach($bannerLine as $item)
                                                                    <tr>
                                                                      <td>#</td>
                                                                      <td><img src="{{ $item->path }}" class="img-thumbnail"></td>
                                                                      <td>{{ $item->titulo }}</td>
                                                                      <td>{{ $item->ordem }}</td>
                                                                      <td> 
                                                                        <a href="{{route('bannerlines.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

                                                                          {{ Form::open(['route' => ['bannerlines.destroy', $item->id], 'method' => 'delete']) }}
                                                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                                           {{ Form::close() }}</td>
                                                                    </tr>     
                                                              @endforeach
                                                            @endif
                                                          </table>
                                                    </div>
                                           @endif
                                           @if($banner->produto == 1)
                                                    <div class="box box-info">
                                                      {!! Form::open(['url' => 'produtobannerlines','class' => 'form-horizontal',  'files' => true]) !!}
                                                            <div class="box-body">
                                                              <div class="form-group">
                                                                   {!! Form::hidden('idbannner',$banner->id) !!}
                                                                   {!! Form::label('Produto:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                                <div class="col-sm-2">
                                                                   {!! Form::text('produto_id',null,['class' => 'form-control']) !!}
                                                                </div>
                                                                   {!! Form::label('Categoria:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                                <div class="col-sm-2">
                                                                   {!! Form::select('categoria_id', $selcat,null,['class' => 'form-horizontal']) !!}
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="box-footer">
                                                                {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                                            </div>
                                                          {!! Form::close() !!}
                                                      </div>
                                                    <h3>Produtos</h3>
                                                    <div class="box-body table-responsive no-padding">
                                                          <table class="table table-hover">
                                                             <tr>
                                                                <th>#</th>
                                                                <th class="col-xs-2">Imagem</th>
                                                                <th>Codigo Artigo</th>
                                                                <th>Titulo</th>
                                                                <th>#</th>
                                                             </tr>
                                                            @if(count($banner->getBannerProdutoCategoria) > 0)
                                                              @foreach($banner->getBannerProdutoCategoria as $item)
                                                                @if(!empty($item->produto_id))
                                                                    <tr>
                                                                      <td>#</td>
                                                                      <td class="col-xs-1"> <img src="{{$item->produto->path}}" style="max-width: 30%;" /></td>
                                                                      <td>{{ $item->produto->cod_art }}</td>
                                                                      <td>{{ $item->produto->titulo }}</td>
                                                                      <td> {{ Form::open(['route' => ['produto.destroyline', $item->id], 'method' => 'delete']) }}
                                                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                                           {{ Form::close() }}
                                                                      </td>
                                                                    </tr>
                                                                @endif
                                                              @endforeach
                                                            @endif
                                                          </table>
                                                    </div>
                                                    <h3>Categorias</h3>
                                                    <div class="box-body table-responsive no-padding">
                                                          <table class="table table-hover">
                                                              <tr>
                                                                <th>#</th>
                                                                <th>Categoria</th>
                                                                <th>#</th>
                                                              </tr>
                                                            @if(count($banner->getBannerProdutoCategoria) > 0)
                                                              @foreach($banner->getBannerProdutoCategoria as $item)
                                                                @if(!empty($item->categoria_id))
                                                                    <tr>
                                                                      <td>#</td>
                                                                      <td>{{ $item->categoria->titulo }}</td>
                                                                      <td>
                                                                         {{ Form::open(['route' => ['produto.destroyline', $item->id], 'method' => 'delete']) }}
                                                                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                                         {{ Form::close() }}
                                                                      </td>
                                                                    </tr>
                                                                 @endif
                                                              @endforeach
                                                            @endif
                                                          </table>
                                                    </div>
                                            @endif
                                        </div>
                                    </div>
                                 </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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