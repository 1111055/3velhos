
<header class="main-header">
        <a href="{{route('home')}}" class="logo">
         <span class="logo-mini"><b>3</b>VL</span>
            3 Velhos
        </a>

      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  @if(Auth::user()->path !== null)
                     <img src="{{ Auth::user()->path }}" class="user-image" alt="User Image">
                 @else
                     <img src="https://fakeimg.pl/160x160/" class="user-image" alt="User Image">
                  @endif
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  @if(Auth::user()->path !== null)
                     <img src="{{ Auth::user()->path }}" class="img-circle" alt="User Image">
                  @else
                     <img src="https://fakeimg.pl/160x160/" class="img-circle" alt="User Image">
                  @endif
                  <p>
                    {{ Auth::user()->name }}
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{ route('user.edit', Auth::user()->id )}}" class="btn btn-default btn-flat">Me</a>
                  </div>
                  <div class="pull-right">
                 
                      <form id="logout-form" action="{{ route('logout') }}"  method="POST" >
                              {{ csrf_field() }}
                              <button class="btn btn-danger" type="submit"><i class="fa fa-power-off"></i></button>
                      </form>
                  </div>
                </li>

              </ul>
            </li>
          </ul>
        </div>
      </nav>
</header>