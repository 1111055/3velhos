  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fab fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="active"><a href="{{route('home')}}"><i class="fas fa-home"></i> <span>Home</span></a></li>



         <li class="treeview">
            <a href="#"><i class="fas fa-users"></i> <span>Utilizadores</span>
              <span class="pull-right-container">
                  <i class="fas fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('user')}}"><i class="fas fa-users"></i><span>Utilizadores</span></a></li>
               @if(Auth::user()->isinrule(['supermaster']))
                  <li><a href="{{route('role')}}"><i class="fas fa-gavel"></i> <span>Regras</span></a></li> 
               @endif
            </ul>
          </li>

         
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
