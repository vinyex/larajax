  <header class="main-header">

    <a href="/" class="logo">

      <span class="logo-mini"><b>V</b>M</span>

      <span class="logo-lg">{{ config('app.name', 'VirtualManage') }}</span>
    </a>


    <nav class="navbar navbar-static-top" role="navigation">

      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="{{ asset("/img/liam-gallagher-profile.jpg") }}" class="user-image" alt="User Image">

              <span class="hidden-xs">{{ Auth::user()->username }}</span>
            </a>
            <ul class="dropdown-menu">

              <li class="user-header">
                <img src="{{ asset("/img/liam-gallagher-profile.jpg") }}" class="img-circle" alt="User Image">

                <p>
                  <i class="fa fa-hand-paper-o fa-fw"></i> Hey {{ Auth::user()->username }} ^^
                </p>
              </li>

              <li class="user-footer">
               @if (Auth::guest())
                  <div class="pull-left">
                    <a href="{{ route('login') }}" class="btn btn-default btn-flat">Login</a>
                  </div>
               @else
                 <div class="pull-left">
                    <a href="{{ url('profile') }}" class="btn btn-default btn-flat"><i class="fa fa-desktop fa-fw"></i>Profile</a>
                  </div>
                 <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out fa-fw"></i>Logout
                    </a>
                 </div>
                @endif
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
   </form>
