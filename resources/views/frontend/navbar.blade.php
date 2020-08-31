	<div id="preloader"></div>

    <div id="search-wrapper">
        <div class="container">
            <input id="search-box" placeholder="Search"><span class="close-trigger"><i class="fa fa-angle-up"></i></span>
        </div>
    </div>
    
        <!-- Navigation -->
        <nav  id="menu" class="nav navbar navbar-default navbar-fixed-top fadeInDown header-2" data-wow-delay="0.5s" style="max-width: 100%;margin-left: 70%;margin-top: 1%;">
			<ul>
			  @foreach($menu as $test) 
	                  
                <li>
					<a href="#{{$test['path']}}" class="menuclick">
						<span class="icon">
							<i aria-hidden="true" class="{{$test['link']}}"></i>
						</span>
						<span>{{$test['menu']}}</span>
				
					</a>
					<ul style="display: none;opacity: 0.70" >
					    @foreach($test['submenutmp'] as $sub) 
							<li style="width: 100% !important;">
								<a href="{{route($sub['path'],$sub['pagina'])}}" style="height: 2.5em; ">
									<span>{{$sub['menu']}}</span>
								</a>
							</li>
						@endforeach
					</ul>
				</li>
	                       
	           @endforeach
	       </ul>

        </nav>
