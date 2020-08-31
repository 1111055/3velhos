
@extends('frontend.app')

@section('content')

<!--Cover-->
<section class="pb-0 bg-img1">
    <div class="bg-overlay gradient-bg1 opacity-9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cover-text mt-5">
                    <h2 class="text-white mb-2">{{ $exp[1]['expression'] }}</h2>
                    <p class="text-white">{{ $exp[3]['expression'] }}</p>
                    <div class="page_nav">
                        <span>Home <span class="third-color"><i class="fa fa-angle-double-right"></i> <a href="{{route('home')}}"> Blog</a></span><span class="third-color"><i class="fa fa-angle-double-right"></i> Pesquisa</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cover End-->

<!--Page Content-->
<div id="app">

<section >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-xs-5">
                 <h4 class="mt-2 mb-3">{{$value}}</h4>
                @if(count($art) > 0)
                     @foreach($art as $key => $value)
                        @if($value->activo == 1)
                            <div class="blog-list-item">
                                <a href="{{route('articles.show',[$value->id])}}">
                                    <div class="blog-item-img mb-5 hover-effect">
                                        <img src="{{$value->path}}" alt="image">
                                    </div>
                                </a>
                             
                                <div class="blog-item-content">
                                    <span class="category third-color tex">{{$value->categoriablog->titulo}}</span> - <span class="date">{{ date('d M Y', strtotime($value->created_at)) }}</span>
                                    <h4 class="mt-2 mb-3"><a href="{{route('articles.show',[$value->id])}}">{{$value->title}}</a></h4>
                                    <p class="mb-4">{!! $value->body !!}</p>
                                 
                                    <a href="{{route('articles.show',[$value->id])}}" class="btn btn-large btn-gradient btn-rounded"> Ver Mais </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
               @endif
            </div>
        </div>
    </div>
</section>
<!--Page Content End-->
</div>

@stop

@section('scripts')
     
@stop