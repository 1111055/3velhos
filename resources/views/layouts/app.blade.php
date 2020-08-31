<html class="no-js" lang="en-US">
@include('backend.head')


<body class="hold-transition login-page" style="background-color: #d11d1d;">
<div class="login-box">
  <div class="login-logo">

    <div class="login-logo">
   <img src="{{asset('/images/logo.jpg')}}" alt="logo-image" 
    style="max-width: 250px";>
  </div>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">


        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group has-feedback">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email"  value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>   
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password"  placeholder="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        Login
                    </button>
                </div>
               
            </div>
        </form>

  </div>

</div>

</body>
</html>
