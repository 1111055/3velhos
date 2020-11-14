


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

                 <div class="container">
                  <div class="row">
                    <!--div class="col-lg-7 col-md-12">
                      <div class="about-img">
                        <img class="img" src="img/banner/about.jpg" alt="about-us">
                      </div>
                    </div-->
                    <div class="col-lg-12 col-md-12 text-center">
                      <div class="about-content">
                        <h3>{{$pagepolicy->titulo}}</h3>
                         {!! $pagepolicy->descricao !!}
                      </div>
                    </div>
                  </div>
                </div>
            <div class="about-main-area" style="margin-bottom: 10%;margin-top: 5%;">
             <div class="container">
                <div class="accordion" id="accordionExample">
                     @foreach ($desc as $key => $item)
                      <div class="card">
                        <div class="card-header" id="heading{{$key}}">
                          <h2 class="mb-0">
                           <i class="fa fa-arrow-down"></i> <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                             {!! $item->titulo !!}
                            </button>
                          </h2>
                        </div>

                        <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordionExample">
                          <div class="card-body">
                               {!! $item->descricao1 !!}
                          </div>
                        </div>
                      </div>
                      @endforeach

                </div>
             </div>
        </div>

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
