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


            
              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                   Editar Produto
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('produto')}}"><i class="fa fa-product-hunt"></i> Produtos</a></li>
                    <li class="active"><a href="{{route('produto.edit', $produto->id)}}"><i class="fa fa-product-hunt"></i> Editar Produto</a></li>
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
                                          <div class="hidden-xs">Produto</div>
                                      </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                      <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-image" aria-hidden="true"></span>
                                          <div class="hidden-xs">Imagens</div>
                                      </button>
                                  </div>
                              </div>

                             <div class="well">
                                <div class="tab-content">
                                  <div class="tab-pane fade in active" id="tab1">
                                      <div class="box box-info">
                                             {!! Form::model($produto, [
                                                  'method' => 'PUT',
                                                  'route' => ['produto.update', $produto->id],
                                                  'class' => 'form-horizontal',
                                                   'files' => true
                                             ]) !!}
                                            <div class="box-body">
                                              <div class="form-group">
                                                {!! Form::label('Codigo Artigo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('cod_art',$produto->cod_art,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                {!! Form::label('* Titulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('titulo',$produto->titulo,['class' => 'form-control']) !!}
                                                </div>
                                              </div>
                                               <div class="form-group">
                                                  {!! Form::label('* Subtitulo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::text('subtitulo',$produto->subtitulo,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                     {!! Form::label('Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::textarea('descricao',$produto->descricao,['class' => 'form-control', 'id' => 'descricao']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Lote:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::text('lote',$produto->lote,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::text('link',$produto->link,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>
                                                 <div class="form-group">
                                                    {!! Form::label('Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::text('ordem',$produto->ordem,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::checkbox('activo',1,$produto->activo) !!}
                                                  </div>
                                                </div>
                                            </div>
                                             <div class="box-body">
                                                <h3>Caracteristicas</h3>
                                                <div class="form-group">
                                                    {!! Form::label('Categoria:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::select('categoria_id', $selcat,$produto->categoria_id,['class' => 'form-horizontal']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Sub Categoria:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::select('subcategoria_id', $selsubcat,$produto->subcategoria_id,['class' => 'form-horizontal']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Familia:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::select('familia_id', $selfam,$produto->familia_id,['class' => 'form-horizontal']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Sub Familia:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::select('subfamilia_id', $selsubcat,$produto->subfamilia_id,['class' => 'form-horizontal']) !!}
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                       {!! Form::label('Prazos:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                    <div class="col-sm-8">
                                                      {!! Form::select('prazos_id', $selprazo,$produto->prazos_id,['class' => 'form-horizontal']) !!}
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                       {!! Form::label('Sexo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                    <div class="col-sm-8">
                                                       <select class="form-horizontal" name="sexo" id="sexo">
                                                            <option value="0">-- Escolha uma opção --</option>
                                                            <option value="1" @if($produto->sexo == 1)SELECTED @endif>Masculino</option>
                                                            <option value="2" @if($produto->sexo == 2)SELECTED @endif>Feminino</option>
                                                       </select>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    {!! Form::label('Desconto Comercial (%):',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                      {!! Form::text('desconto',$produto->desconto,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                
                                               <div class="row">
                                                  <div class="col-md-4 offset-md-3">
                                                      <h3>Tamanhos </h3>
                                                          

                                                           <div class="col-sm-4">
                                                              {{Form::select('sizes[]', $seltamanhos,$arrys, ['class' => 'form-control input-sm multiplePicker', 'multiple'=>'multiple'])}} 
                                                           </div>
                                                       
                                                   
                                                  </div>  
                                                 
                                                  <div class="col-md-6 offset-md-3">
                                                         <h3 style="margin-bottom: 3%;">Cores </h3>
                                                          <div class="col-sm-4">
                                                              {{Form::select('cores[]', $selcores,$arry, ['class' => 'form-control input-sm multiplePicker', 'multiple'=>'multiple'])}} 
                                                           </div>
                                                       
                                                  </div> 
                                               </div> 
                                            </div>                                                   
                                      

                                            <div class="box-body">
                                                <h3>Outros</h3>
                                                <div class="form-group">
                                                  {!! Form::label('Observações Internas:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-8">
                                                     {!! Form::textarea('obs',$produto->obs,['class' => 'form-control']) !!}
                                                  </div>
                                                </div>
                                                   <div class="col-xs-2">
                                                   </div>
                                                <div class="col-xs-4">
                                                <p><div id="fileDisplayArea"></div></p>
                                                    <div class="col-xs-8">
                                                          <img src="{{$produto->path}}"  />
                                                    </div>
                                                </div>
                                               <div class="form-group col-sm-6">
                                                    <label>Imagem Principal (468x659)</label>
                                                     <input type="file" name="prodimg" id="exampleInputImage" class="image"> 
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

                                             {!! Form::open(['url' => 'produtoimagem','class' => 'form-horizontal', 'files' => true ]) !!}

                                                 {!! Form::hidden('idprod',$produto->id,['class' => 'form-control']) !!}
                                                <div class="form-group">
                                                    {!! Form::label('Ordem:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                <div class="col-sm-2">
                                                     {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Destacar:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                  <div class="col-sm-1">
                                                     {!! Form::checkbox('destacar',1,true) !!}
                                                  </div>
                                                </div>
                                               <div class="form-group">
                                                    {!! Form::label('Activo:',null, ['class' => 'col-sm-1 control-label']) !!}
                                                  <div class="col-sm-1">
                                                     {!! Form::checkbox('activo',1,true) !!}
                                                  </div>
                                                </div>

                                                <div class="col-xs-2">
                                                </div>
                                                <div class="col-xs-4">
                                                <p><div id="fileDisplayArea"></div></p>
                                                    <div class="col-xs-8">
                                                          <img src="#"  />
                                                    </div>
                                                </div>
                                               <div class="form-group col-sm-6">
                                                    <label>Imagens Produto</label>
                                                    <input type="file" name="prodimg" id="exampleInputImage" class="image"> 
                                                </div>
                                                </div>
                                            <div class="box-footer">
                                                {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                            </div>
                                             {!! Form::close() !!}
                                          </div>
                                        <div class="box-body table-responsive no-padding">
                                          <div class="box box-info">
                                              <table class="table table-hover">
                                                <tr>
                                                  <th class="col-xs-1">#</th>
                                                  <th>Ordem</th>
                                                  <th class="text-center">Destacar</th>
                                                  <th class="text-center">Active</th>
                                                  <th>#</th>
                                                </tr>
                                               
                                                
                                                @foreach($produto->imagensproduto as $item)
                                                 <tr>
                                                  <td class="col-xs-1"> <img src="{{ $item->path }}"  /></td>
                                                  <td>{{ $item->ordem }}</td>
                                                   @if ($item->destacar === 1)
                                                    <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                                  @else                       
                                                     <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                                  @endif  
                                                  @if ($item->activo === 1)
                                                     <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                                  @else                       
                                                    <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                                  @endif   
                                                  <td><a href="{{route('banner.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 

                                                  {{ Form::open(['route' => ['banner.destroy', $item->id], 'method' => 'delete']) }}
                                                  <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                                  {{ Form::close() }}

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