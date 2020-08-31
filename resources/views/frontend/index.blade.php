
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
                        <span>Home <span class="third-color"><i class="fa fa-angle-double-right"></i> Blog</span>
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
            <!--left side-->
            <div class="col-lg-8 mb-xs-5">
            	<articles></articles>
                
            </div>

            <div class="col-lg-4">
                <div class="widget d-flex bg-light mb-4">
                   
                    {{ Form::open(array('url' => 'articles/search', 'method' => 'post')) }}
                        <input class="search" placeholder="Pesquisa.." name="search" type="text">
                        <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    
                    {{ Form::close() }}
                   
                </div>
                <!--recent post-->
                <div class="widget bg-light">
                    <h5 class="mb-4">{{ $exp[10]['expression'] }}</h5>
                    <!--recent post item-->
                    @foreach($art['data'] as $key => $value)
                            <div class="recent-post d-flex">
                                <img src="{{ $value['path'] }}" alt="image">
                                <div class="text alt-font">
                                    <a href="{{ route('articles.show',[$value['id']])}}">{{ $value['title'] }}</a>
                                    <span class="date">{{ date('d M Y', strtotime($value['created_at'])) }}</span>
                                </div>
                            </div>
                    @endforeach
                </div>
                <!--category-->
                <div class="widget bg-light">
                    <h5 class="mb-4">{{ $exp[11]['expression'] }}</h5>
                     <ul class="list-unstyled blog-category m-0 alt-font">
                        @foreach($cat2 as $key => $value)
                          <li><a href="{{ route('articles.categoria', $value['id']) }}">{{$value['titulo']}} <span class="float-right">{{$value['qtd']}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Content End-->
</div>

@stop

@section('scripts')
     
@stop