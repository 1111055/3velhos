  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>3</b>VL</span>
      <!-- logo for regular state and mobile devices -->
         3 Velhos
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->

                @if(Auth::user()->path !== null)
                   <img src="{{ Auth::user()->path }}" class="user-image" alt="User Image">
               @else
                   <img src="https://fakeimg.pl/160x160/" class="user-image" alt="User Image">
                @endif
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
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
          <!-- Control Sidebar Toggle Button -->
          <!--li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li-->
        </ul>
      </div>
    </nav>
  </header>