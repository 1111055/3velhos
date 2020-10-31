
<!doctype html>
<html class="no-js" lang="en-US">
@include('backend.head')


  <header class="main-header">
          <a href="{{route('home')}}" class="logo">
           <span class="logo-mini"><b>3</b>VL</span>
              3 Velhos
          </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
  </header>
  <aside class="main-sidebar">

    <section class="sidebar">

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fab fa-search"></i>
              </button>
            </span>
        </div>
      </form>

      <ul class="sidebar-menu" data-widget="tree">

         <li class="active"><a href="{{route('home')}}"><i class="fas fa-home"></i> <span>Login</span></a></li>

      </ul>
    </section>
  </aside>


<body class="hold-transition skin-blue sidebar-mini" >
  <div class="wrapper">

  <div class="alert alert-success" id="showsucess" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed; width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>
  <div class="alert alert-danger" id="showerror" style="display:none; border-radius: 0; float: right; margin-top: 7%; position: fixed;  width: 600px; z-index: 9999;margin-right: 15%;">
             
  </div>

<div id="app">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content" >
                      <div class="col-xs-3" id="firstbloc">
                       
                        </div>
                      
                      <div class="container col-xs-6 " id="secundbloc"  >
                             <articles></articles>
                            <div class="box box-primary">
                          
                              <div class="box-header with-border">
                                <h3 class="box-title">Classificação Geral</h3>
                              </div>

                              <div class="box-body">
                                
                              </div>
                            </div>
                             <div class="box box-primary">
                          
                              <div class="box-header with-border">
                                <h3 class="box-title">Classificação Geral</h3>
                              </div>

                              <div class="box-body">
                                <ul class="products-list product-list-in-box" id="classifica">
                               
                                </ul>
                              </div>
                            </div>
                                                        <div class="box box-primary">
                          
                              <div class="box-header with-border">
                                <h3 class="box-title">Classificação Geral</h3>
                              </div>

                              <div class="box-body">
                                <ul class="products-list product-list-in-box" id="classifica">
                               
                                </ul>
                              </div>
                            </div>

                       </div>

                       <div class="col-xs-3" id="thirstbloc">
                       
                        </div>
            </section>

         </div>
  </div>

            @include('backend.footer')
            
  </div>
</body>
</html>
<script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{asset('public/js/app.js')}}"></script>
<script type="text/javascript">
  

if ($(window).width() < 514) {
    $('#firstbloc').attr('class', 'container col-xs-12');
    $('#secundbloc').attr('class', 'container col-xs-12');
    $('#thirstbloc').attr('class', ' container col-xs-12');

} else {
    $('#firstbloc').attr('class', 'container col-xs-3');
    $('#secundbloc').attr('class', 'container col-xs-6');
    $('#thirstbloc').attr('class', 'container col-xs-3');

}



</script>