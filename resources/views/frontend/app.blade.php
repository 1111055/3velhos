
@include('frontend.head')
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


      

    			 @yield('content')

    	
    	   	@include('frontend.footer')

          <!-- Optional JavaScript -->
          <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
          <script src="{{asset('js/popper.min.js')}}"></script>
          <script src="{{asset('js/bootstrap.min.js')}}"></script>
          <script src="{{asset('js/jquery.appear.js')}}"></script>
          <!-- isotop gallery -->
          <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
          <!-- cube portfolio gallery -->
          <script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
          <!-- owl carousel slider -->
          <script src="{{asset('js/owl.carousel.min.js')}}"></script>
          <!-- wow -->
          <script src="{{asset('js/wow.js')}}"></script>
          <!-- parallax Background -->
          <script src="{{asset('js/parallaxie.min.js')}}"></script>
          <!-- fancybox popup -->
          <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
          <!-- REVOLUTION JS FILES -->
          <script src="{{asset('rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
          <!-- SLIDER REVOLUTION EXTENSIONS -->
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
          <script src="{{asset('rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
          <!-- custom script -->
          <script src="{{asset('js/script.js')}}"></script>
          <script src="{{asset('public/js/app.js')}}"></script>

            @yield('scripts')


     </body>
 </html>
