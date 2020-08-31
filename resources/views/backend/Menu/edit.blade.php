@extends('backend.app')

@section('content')

              @include('backend.alert')
              
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                    Editar Menu
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('dash')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('menu')}}"><i class="fa fa-align-justify"></i> Menus</a></li>
                    <li class="active"><a href="{{route('menu.edit', $menu->id)}}"><i class="fa fa-align-justify"></i>Editar Menu</a></li>
                  </ol>
                </section>

                <section class="content container-fluid">             
            <!-- /.row -->
                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                        
                         <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="box box-info">
                                     {!! Form::model($menu, [
                                          'method' => 'PUT',
                                          'route' => ['menu.update', $menu->id],
                                          'class' => 'form-horizontal'
                                     ]) !!}
                                    <div class="box-body">
                                      <div class="form-group">
                                        {!! Form::label('* Menu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('menu',$menu->menu,['class' => 'form-control']) !!}
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                           {!! Form::label('* Descricao:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::textarea('descricao',$menu->descricao,['class' => 'form-control']) !!}
                                        </div>
                                      </div>
                                       <div class="form-group">
                                          {!! Form::label('* Submenu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::select('submenu', $selmenu,$menu->submenu,['class' => 'form-horizontal']) !!}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          {!! Form::label('* Link:',null, ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-sm-8">
                                           {!! Form::text('link',$menu->link,['class' => 'form-control']) !!}
                                        </div>
                                       </div>
                                       <div class="form-group">
                                           {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                         <div class="col-sm-8">
                                           {!! Form::text('ordem',$menu->ordem,['class' => 'form-control']) !!}
                                         </div>
                                      </div>
                                      @if(Auth::user()->isinrule(['supermaster']))
                                      <div class="form-group">
                                           {!! Form::label('Path:',null, ['class' => 'col-sm-2 control-label']) !!}
                                         <div class="col-sm-8">
                                           {!! Form::text('path',$menu->path,['class' => 'form-control']) !!}
                                         </div>
                                      </div>
                                      @endif

                                    </div>
                                    <div class="box-footer">
                                        {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                    </div>
                                  {!! Form::close() !!}
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-header">
                              <label>Submenu</label>
                            </div>
                            <div class="panel-body">
                              @if(Auth::user()->isinrule(['supermaster']))
                                <div class="col-xs-12">
                                  <div class="box box-info">
                                    {!! Form::open(['url' => 'menu','class' => 'form-horizontal']) !!}
                                          <div class="box-body">
                                            <div class="form-group">
                                             {!! Form::hidden('submenu',$menu->id,['class' => 'form-control']) !!}
                                              {!! Form::label('* Menu:',null, ['class' => 'col-sm-2 control-label']) !!}
                                              <div class="col-sm-4">
                                                 {!! Form::text('menu',null,['class' => 'form-control']) !!}
                                              </div>
                                                 {!! Form::label('* Ordem:',null, ['class' => 'col-sm-2 control-label']) !!}
                                              <div class="col-sm-4">
                                                 {!! Form::text('ordem',null,['class' => 'form-control']) !!}
                                              </div>
                                                
                                            </div>

                                          </div>
                                          <div class="box-footer">
                                              {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                          </div>
                                        {!! Form::close() !!}
                                    </div>
                                  </div>
                                @endif
                                 <div class=" row col-xs-12 box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                      <tr>
                                        <th>Ordem</th>
                                        <th>Menu</th>
                                        <th>Pagina</th>
                                        <th>Descrição</th>
                                        <th class="text-center">Active</th>
                                        <th>#</th>
                                      </tr>
                                       @foreach($menus as $item)
                                          <td>{{ $item->ordem }}</td>
                                          <td>{{ $item->menu }}</td>
                                          <td>{{ $item->link }}</td>
                                          <td>{{ $item->descricao }}</td>
                                          @if ($item->activo === 1)
                                              <td class="text-center"><i class="fa fa-check-circle"></i></td>
                                          @else                       
                                          <td class="text-center"><i class="fa fa-times-circle"></i></td>
                                          @endif   
                                          <td><div class="col-xs-1"><a href="{{route('menu.edit',$item->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></div>
                                          <div class="col-xs-1"> 
                                            @if(Auth::user()->isinrule(['supermaster']))
                                              {{ Form::open(['route' => ['menu.destroy', $item->id], 'method' => 'delete']) }}
                                              <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                              {{ Form::close() }}
                                            @endif  
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

                </section>
              </div>

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