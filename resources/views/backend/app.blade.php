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

 $(document).ready(function() {
    classificacoes();
});

$('.apptmp').on('click', function(){

    var btn = $(this);
    if(  $(this).attr('class') == 'btn btn-default apptmp'){


            var post_url = $("#rota").val(); //get form action url
            var request_method = "POST"; //get form GET/POST method
            var opt =  $('#apostatmp').val();
            var game = $(this).attr('idjogo');
            var opt = $(this).attr('app');
            var user_id = $('#user_id').val();
            var token = $('#_token').val();

          

            $.ajax({
                url: post_url,
                type: request_method,
                data: { _token: token, user_id : user_id, jogo_id: game, aposta: opt } 
            }).done(function (response) {
                if(response == 0){

                         btn.closest('tr').find('td').each(function() {


                            var  btntnp =  $(this).find('button');
                            var idjogo = btntnp.attr('app');
                             if(idjogo){
                                 if(btn.text() == btntnp.text()){
                                   btn.attr('class', 'btn btn-success apptmp');
                                 }else{
                                      btntnp.attr('class', 'btn btn-default apptmp');
                                 }
                             }

                       });
                                          
                }else if(response == 5){

                        $( '#showerror').text( "!! Erro -Já se encotra fechado este jogo, viesses mais cedo !! " );
                        $('#showerror').show();

                        setTimeout(function(){ 

                               $('#showerror').text("");
                               $('#showerror').hide();

                         }, 1500);
                }
             
            });
       

         
    }else{
          $(this).attr('class', 'btn btn-default apptmp');
    }
});

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
   // var url      = window.location.href; 
      window.location.href=window.location.href;
    //alert(url);
    });

});


$("form[name='formsendgame']").submit(function (e) {
    e.preventDefault();

    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    var opt =  $('#apostatmp').val();
    var game = $('#jogo_id').val();

    if(opt != 0){
        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data
        }).done(function (response) {

        $('#exampleModalapostar').modal('toggle');
        $( '#showsucess').text( "!! Guardado Com Sucesso " );
        $('#showsucess').show();

        setTimeout(function(){ 

                var link = "#".concat(game);
                $(link).find('.apotar').remove();

               $('#showsucess').text("");
               $('#showsucess').hide();
               var text = '<span class="label label-warning">'.concat(opt).concat('</span>');
                $('#apostatmp').prop('selectedIndex',0);

               $(link).html(text);

         }, 1500);
            
         
        });
    }else{
        $('#exampleModalapostar').modal('toggle');
        $( '#showerror').text( "!! Erro - Compo obrigatório !! " );
        $('#showerror').show();

        setTimeout(function(){ 

               $('#showerror').text("");
               $('#showerror').hide();
               $('#exampleModalapostar').modal('toggle');

         }, 1500);
    }
});


$("form[name='formsendaposta']").submit(function (e) {
    e.preventDefault();

    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    var opt =  $('#resultadotp').val();
    var game = $('#jogoid').val();

    if(opt != 0){
        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data
        }).done(function (response) {

        classificacoes();
        $('#resultadotmp').modal('toggle');
        $( '#showsucess').text( "!! Guardado Com Sucesso " );
        $('#showsucess').show();

        setTimeout(function(){ 

                var link = "#fec".concat(game);
                $(link).find('.fechar').remove();

               $('#showsucess').text("");
               $('#showsucess').hide();
               var text = '<span class="label label-danger">Jogo Fechado</span>';
                $('#resultadotp').prop('selectedIndex',0);

               $(link).html(text);

         }, 1500);
            
        });
    }else{
        $('#resultadotmp').modal('toggle');
        $( '#showerror').text( "!! Erro - Compo obrigatório !! " );
        $('#showerror').show();
       classificacoes();
        setTimeout(function(){ 

               $('#showerror').text("");
               $('#showerror').hide();
               $('#resultadotmp').modal('toggle');

         }, 1500);
    }

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


function classificacoes(){
        jQuery('#classifica').html('');
        $.get("{{ route('classificacao.getall') }}")
          .done(function( data ) {

            data.forEach(function(entry) {
             console.log(entry);

             var html =  "<li class='item'><div class='product-info'><a href='javascript:void(0)' class='product-title'>"+ entry['nome'] +"<span class='label label-success pull-right'>"+ entry['pontos'] +"</span></a></div></li>";

             $( "#classifica" ).append(html);
            });
                     
          });

  }

</script>
