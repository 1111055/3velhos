
  <aside class="main-sidebar">

    <section class="sidebar">

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fab fa-search"></i>
              </button>
            </span>
        </div>
      </form>

      <ul class="sidebar-menu" data-widget="tree">

         <li class="active"><a href="{{route('home')}}"><i class="fas fa-home"></i> <span>Home</span></a></li>

         <li class="treeview">
            <a href="#"><i class="fas fa-user"></i> <span>Utilizadores</span>
              <span class="pull-right-container">
                  <i class="fas fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('user')}}"><i class="fas fa-user"></i><span> Utilizadores</span></a></li>
               @if(Auth::user()->isinrule(['supermaster']))
                  <li><a href="{{route('role')}}"><i class="fas fa-gavel"></i> <span>Regras</span></a></li> 
               @endif
            </ul>
          </li>
         @if(Auth::user()->isinrule(['supermaster']))
         <li class="treeview">
            <a href="#"><i class="fas fa-users"></i> <span> Grupos</span>
              <span class="pull-right-container">
                  <i class="fas fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('grupos')}}"><i class="fas fa-users"></i><span>Grupos</span></a></li>
            </ul>
          </li>
         @endif
      </ul>
    </section>
  </aside>
