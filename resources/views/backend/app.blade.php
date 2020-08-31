<!doctype html>
<html class="no-js" lang="en-US">
@include('backend.head')


<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
            @include('backend.navbar')
			      @include('backend.sidebar')

              @yield('content')

	
		       	@include('backend.footer')
            @include('backend.rightsite')
	</div>

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>

     <script src="https://kit.fontawesome.com/e2c9ee503e.js" crossorigin="anonymous"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('backend/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    
  
    <script src="{{ asset('js/multiselect2.js') }}"></script>

    <script src="{{ asset('backend/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('backend/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>


<script>

        $("form[name='formsend']").submit(function (e) {
            e.preventDefault();

            var post_url = $(this).attr("action"); //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = $(this).serialize(); //Encode form elements for submission

            $.ajax({
                url: post_url,
                type: request_method,
                data: form_data
            }).done(function (response) {
              alert('Guardado com Sucesso!');
                location.reload();
            });

        });
$('.apostar').on('click', function(){

  
    var idojogo = $(this).attr('idjogo');
    $('#jogo_id').val(idojogo);

  $('#exampleModalapostar').modal('toggle');

});

$('.fechar').on('click', function(){

  
    var idojogo = $(this).attr('idjogo');
    $('#jogoid').val(idojogo);

  $('#resultadotmp').modal('toggle');

});



</script>
