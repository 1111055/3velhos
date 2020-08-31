
@extends('frontend.app')

@section('content')

	<div id="headerwrapserv" class="half">
   		<div class="container">
	    	<div class="gap"></div> 

		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<div id="content-wrapper">

		<!-- BLOG POSTS -->
		<div class="container">
			<div class="row mt">
	        	<div class="centered gap fade-down section-heading">
	                <h2 class="main-title">{{$page->titulo}}</h2>
	                <hr>
	                <p>{{$page->subtitulo}}</p>
	            </div> 
			</div><!-- row -->

					@foreach($page->desc as $key => $item)
						@if ($key % 2 == 0 || $key == 0) 
						<div class="row mt gap text-center">
						 @endif
							<div class="col-md-6 post fade-up">
			                	
			                     <span class="{{$item->class}}"></span>

								<h3>{{$item->titulo}}</h3>
								{!! $item->descricao1 !!}
							</div>
						@if ($key % 2 != 0) 
					     </div>
						@endif
					@endforeach		

			
		</div><!-- container -->
	</div>


@stop

@section('scripts')
     <script>
	
	$( document ).ready(function() {
	$('.backstretch').attr('style', 'height: 140px !important');
});
</script>
@stop