
@extends('frontend.app')

@section('content')

<!-- MAIN IMAGE SECTION -->
	<div id="headerwrlok" class="half">
   		<div class="container">
	    	<div class="gap"></div> 

		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<div id="content-wrapper">
	    <section id="about">
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