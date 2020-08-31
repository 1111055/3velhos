

@section('metas')
    <meta property="og:url"           content="{{url()->current()}}" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="{{$art->title}}" />
    <meta property="og:description"   content="{!! $art->body !!}" />
    <meta property="og:image"         content="{{$art->path}}" />
@stop

@extends('frontend.app')


@section('content')

<style type="text/css">

.alert>.start-icon {
    margin-right: 0;
    min-width: 20px;
    text-align: center;
}

.alert>.start-icon {
    margin-right: 5px;
}

.greencross
{
  font-size:18px;
      color: #25ff0b;
    text-shadow: none;
}

.alert-simple.alert-success
{
  border: 1px solid rgba(36, 241, 6, 0.46);
    background-color: rgba(7, 149, 66, 0.12156862745098039);
    box-shadow: 0px 0px 2px #259c08;
    color: #0ad406;
}
.alert-success:hover{
  background-color: rgba(7, 149, 66, 0.35);
  transition:0.5s;
}
.alert-simple.alert-info
{
  border: 1px solid rgba(6, 44, 241, 0.46);
    background-color: rgba(7, 73, 149, 0.12156862745098039);
    box-shadow: 0px 0px 2px #0396ff;
    color: #0396ff;
  text-shadow: 2px 1px #00040a;
  transition:0.5s;
  cursor:pointer;
}

.alert-info:hover
{
  background-color: rgba(7, 73, 149, 0.35);
  transition:0.5s;
}

.blue-cross
{
  font-size: 18px;
    color: #0bd2ff;
    text-shadow: none;
}

.alert-simple.alert-warning
{
      border: 1px solid rgba(241, 142, 6, 0.81);
    background-color: rgba(220, 128, 1, 0.16);
    box-shadow: 0px 0px 2px #ffb103;
    color: #ffb103;
    text-shadow: 2px 1px #00040a;
  transition:0.5s;
  cursor:pointer;
}

.alert-warning:hover{
  background-color: rgba(220, 128, 1, 0.33);
  transition:0.5s;
}

.warning
{
      font-size: 18px;
    color: #ffb40b;
    text-shadow: none;
}

.alert-simple.alert-danger
{
  border: 1px solid rgba(241, 6, 6, 0.81);

    box-shadow: 0px 0px 2px #ff0303;
    color: #ff0303;

}

.alert-danger:hover
{
     background-color: rgba(220, 17, 1, 0.33);
  transition:0.5s;
}

.danger
{
      font-size: 18px;
    color: #ff0303;
    text-shadow: none;
}

.alert-simple.alert-primary
{
  border: 1px solid rgba(6, 241, 226, 0.81);
    background-color: rgba(1, 204, 220, 0.16);
    box-shadow: 0px 0px 2px #03fff5;
    color: #03d0ff;
    text-shadow: 2px 1px #00040a;
  transition:0.5s;
  cursor:pointer;
}

.alert-primary:hover{
  background-color: rgba(1, 204, 220, 0.33);
   transition:0.5s;
}

.alertprimary
{
      font-size: 18px;
    color: #03d0ff;
    text-shadow: none;
}

.square_box {
    position: absolute;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    border-top-left-radius: 45px;
    opacity: 0.302;
}

.square_box.box_three {
    background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    opacity: 0.059;
    left: -80px;
    top: -60px;
    width: 500px;
    height: 500px;
    border-radius: 45px;
}

.square_box.box_four {
    background-image: -moz-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -webkit-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    background-image: -ms-linear-gradient(-90deg, #290a59 0%, #3d57f4 100%);
    opacity: 0.059;
    left: 150px;
    top: -25px;
    width: 550px;
    height: 550px;
    border-radius: 45px;
}

.alert:before {
    content: '';
    position: absolute;
    width: 0;
    height: calc(100% - 44px);
    border-left: 1px solid;
    border-right: 2px solid;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    left: 0;
    top: 50%;
    transform: translate(0,-50%);
      height: 20px;
}

.fa-times
{
-webkit-animation: blink-1 2s infinite both;
            animation: blink-1 2s infinite both;
}


/**
 * ----------------------------------------
 * animation blink-1
 * ----------------------------------------
 */
@-webkit-keyframes blink-1 {
  0%,
  50%,
  100% {
    opacity: 1;
  }
  25%,
  75% {
    opacity: 0;
  }
}
@keyframes blink-1 {
  0%,
  50%,
  100% {
    opacity: 1;
  }
  25%,
  75% {
    opacity: 0;
  }
}

</style>

<!--Cover-->
<section class="pb-0 bg-img1">
    <div class="bg-overlay gradient-bg1 opacity-9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cover-text mt-5">
                    <h2 class="text-white mb-2">{{ $exp[0]['expression'] }}</h2>
                    <p class="text-white">{{ $exp[2]['expression'] }}</p>
                    <div class="page_nav">
                        <span>Home <span class="third-color"><i class="fa fa-angle-double-right"></i> <a href="{{route('home')}}"> Blog</a></span><span class="third-color"><i class="fa fa-angle-double-right"></i> Detail</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cover End-->
<!--page content-->
<div id="app">
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <div class="blog-detail-item row">
                    <div class="blog-detail-img col-sm-12 mb-5 hover-effect">
                        <img src="{{$art->path}}" alt="image">
                    </div>
                    <div class="col-lg-8 mb-lg-0 mb-5 mb-xs-5">
                        <!--blog contetn-->
                        <div class="blog-item-content">
                            <div class="content-text">
                                <span class="category third-color">{{$art->categoriablog->titulo}}</span> - <span class="date">{{ date('d M Y', strtotime($art->created_at)) }}</span>
                                <h4 class="mt-2 mb-4">{{$art->title}}</h4>
                                        {!! $art->body !!}
                            </div>

                            <div class="blog-detail-tag">
                                <ul class="blog-share list-unstyled">
                                    <!--li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fab fa-facebook"></i></a></li-->

                                      <div class="fb-share-button" 
                                        data-href="{{url()->current()}}" 
                                        data-layout="button_count">
                                      </div>
                                    <li>
                                    <a  target="_black" class="facebook-bg-hvr"
                                          href="https://twitter.com/intent/tweet?text={{$art->title}}"
                                          data-size="large">
                                        <i class="fab fa-twitter"></i></a></li>
    
                                    <li><a target="_black" class="facebook-bg-hvr" href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-custom="true"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!--blog nav-->
                            <div class="blog-detail-nav">
                                @if($anterior != 0)
                                  <a href="{{ route('articles.show', [$anterior]) }}"><h6 class="d-inline-block text-capitalize float-left">{{ $exp[5]['expression'] }}</h6></a>
                                @endif
                                @if($seguinte != 0)
                                  <a href="{{ route('articles.show', [$seguinte]) }}"><h6 class="d-inline-block text-capitalize float-right">{{ $exp[4]['expression'] }}</h6></a>
                                @endif
                            </div>
                            <!--blog tags & share-->

                             @if(count($art->getreviews) > 0)
                                <div class="blog-comment pt-3 mb-5">
                                    <h4>{{ $exp[9]['expression'] }}</h4>
                                    <span class="hr-line mt-4 mb-5 ml-0"></span>
                                    <ul class="blog-comment">
                                        @foreach($art->getreviews as $item)
                                         @if($item->aprovado == 1)
                                                <li>
                                                    <div class="d-table w-100">
                                                        <div class="d-table-cell comment-text">
                                                            <a href="javascript:void(0);"><h6 class="d-inline-block m-0">{{$item->nome}}</h6></a>
                                                            <div class="date">{{ date('d M Y, H:m', strtotime($art->created_at)) }}</div>
                                                            <p>{{$item->comentario}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                         @endif
                                        @endforeach
                                    </ul>
                                </div>
                              @endif

                            <div class="blog-write pt-3" id="formreviewtmp">
                                <h4>{{ $exp[7]['expression'] }}</h4>
                                <span class="hr-line mt-4 mb-5 ml-0"></span>
                                <form class="comment-form" id="formreview" action="{{ route('review') }}" method="post">
                                    @csrf
                                    <input type="hidden" class="form-control" name="article_id" value="{{$art->id}}" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nome" placeholder="Name" require>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="website" placeholder="Website">
                                            </div>
                                        </div>
                                          <div class="col-sm-12">
                                              <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert" id="erro" style="display: none;">
                                                  <button type="button" class="close font__size-18" data-dismiss="alert">
                                                                            <span aria-hidden="true">
                                                                                <i class="fa fa-times danger "></i>
                                                                            </span>
                                                                            <span class="sr-only">Close</span>
                                                                        </button>
                                                
                                                  <div class="font__weight-semibold" id="texterror"> </div>
                              
                                               </div>
                                         </div>
                                        <div class="col-md-12">
                                            <textarea placeholder="Comment" name="comentario" class="form-control w-100" rows="8" require></textarea>
                                            <button type="submit" class="btn btn-large btn-gradient btn-rounded w-100">{{ $exp[8]['expression'] }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                              <!--blog comment form-->
                            <div class="blog-write pt-3" id="sucess" style="display: none;">
                                <div class="col-sm-12">
                                        <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                                          <button type="button" class="close font__size-18" data-dismiss="alert">
                                                                    <span aria-hidden="true"><a href="http://www.cakecounter.com/" target="_blank">
                                                    <i class="fa fa-times greencross"></i>
                                                    </a></span>
                                                                    <span class="sr-only">Close</span> 
                                                                </button>
                                          <i class="start-icon far fa-check-circle faa-tada animated"></i>
                                          <strong class="font__weight-semibold"> Obrigado pelo seu comentário.</strong>
                                        </div>
                                      </div>
                                                     
                            </div>

                        </div>
                    </div>
                    <!--right side-->
                    <div class="col-lg-4">
                        <!--recent post-->
                        <div class="widget bg-light">
                            <h5 class="mb-4">{{ $exp[10]['expression'] }}</h5>
                                @foreach($art2['data'] as $key => $value)
                                    <div class="recent-post d-flex">
                                        <img src="{{ $value['path'] }}" alt="image">
                                        <div class="text alt-font">
                                            <a href="#.">{{ $value['title'] }}</a>
                                            <span class="date">{{ date('d M Y', strtotime($value['created_at'])) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                        <!--category-->
                        <div class="widget bg-light">
                            <h5 class="mb-4">{{ $exp[11]['expression'] }}</h5>
                            <!--list-->
                            <ul class="list-unstyled blog-category m-0 alt-font">
                                @foreach($cat as $key => $value)
                                  <li><a href="#.">{{$value['titulo']}} <span class="float-right">{{$value['qtd']}} </span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--page content end-->
</div>

@stop

@section('scripts')

        <script>
               $("#formreview").submit(function(e) {
                   //prevent Default functionality
                       e.preventDefault();


                       var $form   = $(this),

                        nome         = $form.find( "input[name='nome']" ).val(),
                        email        = $form.find( "input[name='email']" ).val(),
                        comentario   = $form.find( "textarea[name='comentario']" ).val(),
                        erro = false;

                       if(nome === ""){

                          erro = true;
                          $form.find( "input[name='nome']" ).focus();
                          $("#erro").fadeIn();
                          $("#texterror").html("<p> Erro - Campo nome Obrigatório </p>");

                          setTimeout(function(){
                              $("#erro").fadeOut();
                          }, 2000);

                       } 

                       if(email !== "" && erro == false){
                          if(!isEmail(email) ){
                               alert("email");
                              erro = true;
                              $form.find( "input[name='email']" ).focus();
                              $("#erro").fadeIn();
                              $("#texterror").html("<p> Erro - Formato incorrecto de email. </p>");

                               setTimeout(function(){
                                      $("#erro").fadeOut();
                                    }, 2000);
                           }
                        }

                       if(comentario === "" && erro == false){

                          erro = true;
                          $form.find( "textarea[name='comentario']" ).focus();
                          alert("Assunto");
                          $("#erro").fadeIn();
                          $("#texterror").html("<p> Erro - Campo comentário Obrigatório </p>");

                          setTimeout(function(){
                              $("#erro").fadeOut();
                          }, 2000);

                       } 

                      /* if(!$('#termos').is(':checked') && erro == false){

                          erro=true;
                          $('#termos').focus();
                          $("#errotermos").fadeIn();
                          $("#errotermos").html("<p> Erro - Obrigatório aceitar os termos e condições. </p>");


                               setTimeout(function(){
                                  $("#errotermos").fadeOut();
                                }, 2000);
                       }*/


                       if(erro == false){
                          

                            var actionurl = e.currentTarget.action;
                            var method = e.currentTarget.method;
                            var formData = new FormData(this);

                            $.ajax({
                                url: actionurl,
                                type: method,
                                data: formData,
                                success: function(data) {
                                      
                                    if(data == 0){
                                       
                                        $('#formreviewtmp').fadeOut();
                                        $('#sucess').fadeIn();
                                             setTimeout(function(){
                                                 $form.find("input[type=text], textarea").val("");
                                                 $('#formreviewtmp').fadeIn();
                                                 $('#sucess').fadeOut();
                                              }, 3000);

                                       }
                                },
                                cache: false,
                                contentType: false,
                                processData: false,
                                xhr: function() { // Custom XMLHttpRequest
                                    var myXhr = $.ajaxSettings.xhr();
                                    if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                                        myXhr.upload.addEventListener('progress', function() {
                                            /* faz alguma coisa durante o progresso do upload */
                                        }, false);
                                    }
                                    return myXhr;
                                }
                            });
                           
                         }
         });


     function isEmail(email) {
          var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          return regex.test(email);
     }


             
        </script>
@stop