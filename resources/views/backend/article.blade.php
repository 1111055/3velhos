


<!DOCTYPE html>
<html class="no-js" lang="en-US">
@include('backend.head')

<style type="text/css">
  .responsive {
    width: 40%;
    height: auto;
     transition: transform ease-in-out 0.3s;
  }
  @media (max-width : 540px) {
    .responsive {
      width: 100%;
      height: auto;
       transition: transform ease-in-out 0.3s;
    }
  }

.responsive:hover {
  transform: scale(1.5);
}

.navbar {
      position: fixed;
    width: 100%;
    top: 0;
}



</style>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="navbar-custom-menu">

          <ul class="nav navbar-nav">

             <li class="dropdown user user-menu"><a href="{{route('home')}}"><i class="fas fa-home"></i> <span>Login</span></a></li>
    
            </ul>
          </div>
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Main content -->
                              <img src="{{asset('/images/logo.png')}}" alt="logo-image" 
    style="max-width: 170px";>
      <div id="app">
        <section class="content">
             <articles></articles>
        </section>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
   @include('backend.footer')
</div>
<!-- ./wrapper -->

<script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{asset('public/js/app.js')}}"></script>

</body>
</html>
