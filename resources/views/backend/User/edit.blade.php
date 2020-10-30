@extends('backend.app')

@section('content')


 @include('backend.alert')
 



            @if (session('error'))
               <div class="alert alert-danger" id="showsucess" style="display:block; border-radius: 0; float: right; margin-top: 7%; position: fixed; width: 600px; z-index: 9999;margin-right: 15%;">
                    {{ session('error') }}
               </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" id="showerror" style="display:block; border-radius: 0; float: right; margin-top: 7%; position: fixed;  width: 600px; z-index: 9999;margin-right: 15%;">
                    {{ session('success') }}
               </div>
            @endif


              <div class="content-wrapper">
                <section class="content-header">
                  <h1>
                   Editar Utilizador
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{route('user')}}"><i class="fa fa-users"></i> Utilizador</a></li>
                  </ol>
                </section>


                <!-- Main content -->
                <section class="content container-fluid">             
>

                  <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                        
                          <div class="col-lg-12 col-sm-12">

                             <div class="well">
                                <div class="tab-content">
                                      <div class="box box-info">
                                             {!! Form::model($user, [
                                                  'method' => 'PUT',
                                                  'route' => ['user.update', $user->id],
                                                  'class' => 'form-horizontal',
                                                  'files' => true,
                                                  'onsubmit' => 'return validateform(this);'
                                             ]) !!}
                                             <div class="box-body">
                                              <div class="form-group">
                                                   {!! Form::label('* Nome:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('name',$user->name,['class' => 'form-control', 'require' => 1]) !!}
                                                </div>
                                                
                                              </div>
                                              <div class="form-group">
                                                   {!! Form::label('* Email:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-8">
                                                   {!! Form::text('emailte',$user->email,['class' => 'form-control','readonly' => 'true']) !!}
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  {!! Form::label('Activo:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-2">
                                                   {!! Form::checkbox('activo',1,$user->activo) !!}
                                                </div>
                                                @if(Auth::user()->isinrule(['supermaster']))
                                                  {!! Form::label('Acessos:',null, ['class' => 'col-sm-2 control-label']) !!}
                                                  <div class="col-sm-4">
                                                    {{Form::select('acessos[]', $selrole,$selroles, ['class' => 'form-control input-sm multiplePicker', 'multiple'=>'multiple'])}} 
                                                  </div>
                                                @endif
                                              </div>   
                                              <div class="form-group col-sm-6">
                                                    <label>Imagem (160x160)</label>
                                                     <input type="file" name="banerimg" id="exampleInputImage" class="image"> 
                                              </div>
                                              <div class="col-xs-12">
                                              <p><div id="fileDisplayArea"></div></p>
                                                  <div class="col-xs-2">
                                                        <img src="{{$user->path}}" style="max-width: 200%;" />
                                                  </div>
                                              </div>
                                              </div>
                                                
                                            </div>
                                            <div class="box-footer">
                                                                                                  <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                              Alterar PassWord
                                            </button>
                                               {!! Form::submit('Guardar',['class' => 'btn btn-info pull-right']) !!}
                                            </div>
                                          {!! Form::close() !!}
                                      </div>
                                </div>
                              </div>
                             </div>
                          </div>
                      </div>
                    </div>
                </section>
              </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar PassWord</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <form class="form-horizontal" method="POST" action="{{ route('user.changePassword') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                  <label for="new-password" class="col-md-4 control-label">Password antiga</label>

                  <div class="col-md-6">
                      <input id="current-password" type="password" class="form-control" name="current-password" required>

                      @if ($errors->has('current-password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('current-password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                  <label for="new-password" class="col-md-4 control-label">Nova Password</label>

                  <div class="col-md-6">
                      <input id="new-password" type="password" class="form-control" name="new-password" required>

                      @if ($errors->has('new-password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('new-password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group">
                  <label for="new-password-confirm" class="col-md-4 control-label">Confirme Password</label>

                  <div class="col-md-6">
                      <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Change Password
                      </button>
                  </div>
              </div>
    </form>
      </div>
    </div>
  </div>
</div>
@stop

