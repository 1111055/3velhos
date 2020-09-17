<!doctype html>
<html class="no-js" lang="en-US">
@include('backend.head')


<body class="hold-transition skin-blue sidebar-mini" >
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

    <script src="{{ asset('backend/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
     <script src="{{ asset('backend/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

       <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
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

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

    $('#op0').on('click', function(){

  
        $('#op0').prop('checked', true);
        $('#op1').prop('checked', false);
        $('#op2').prop('checked', false);
        $('#op3').prop('checked', false);
    });

    $('#op1').on('click', function(){

  
        $('#op0').prop('checked', false);
        $('#op1').prop('checked', true);
        $('#op2').prop('checked', false);
        $('#op3').prop('checked', false);
    });



    $('#op2').on('click', function(){

  
        $('#op0').prop('checked', false);
        $('#op1').prop('checked', false);
        $('#op2').prop('checked', true);
        $('#op3').prop('checked', false);
    });



    $('#op3').on('click', function(){

        $('#op0').prop('checked', false);
        $('#op1').prop('checked', false);
        $('#op2').prop('checked', false);
        $('#op3').prop('checked', true);
    });



if ($(window).width() < 514) {
    $('#bodyarrow').attr('class', 'container col-xs-12');
    $('#Classificacaoclass').attr('class', 'container col-xs-12');
    $('#jogoclass').attr('class', ' container col-xs-12');
    $('#filterclass').attr('class', 'container col-xs-12');
} else {
    $('#bodyarrow').attr('class', 'container col-xs-2');
    $('#jogoclass').attr('class', 'container col-xs-8');
    $('#Classificacaoclass').attr('class', 'container col-xs-4');
    $('#filterclass').attr('class', 'container col-xs-8');
}

</script>
