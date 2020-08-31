
@extends('frontend.app')

@section('content')

<!-- MAIN IMAGE SECTION -->
	<div id="headerwraplap" class="half">
   		<div class="container">
	    	<div class="gap"></div> 

		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<div id="content-wrapper">
	    <section id="about">
	   		<div class="container">
				<div class="row gap">
					        	<div id="bannertext" class="centered fade-down section-heading">
					                <h2 class="main-title">{{$page->titulo}}</h2>
					                <hr>
					                <p>{{$page->subtitulo}}</p>
					            </div>

					<div class="col-md-12 text-justify">
						{!! $page->descricao1 !!}
						 <a href="{{route('contactos')}}"  class="btn btn-outlined btn-primary btn-lg bounce-in" type="submit" name="submit" />{{$exp[2]['expression']}}</a>
				    </div>

			</div>	
	    </section>
	</div>

@stop


@section('scripts')
     <script>
	
	$( document ).ready(function() {
	$('.backstretch').attr('style', 'height: 140px !important');
});
</script>
@stop