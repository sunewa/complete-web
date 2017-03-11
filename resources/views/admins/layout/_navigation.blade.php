<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{ URL('public/uploads/web/logo_mini.png') }}"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{ config('app.name') }}</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      {{ Auth::check() ? 'Logged in' : 'Logged out' }}
    </a>
    <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <a href="https://drive.google.com/file/d/0B3WgHTzRhojnT1M2QU9RYm0xVk0/view" target="_blank">
                  <i class="glyphicon glyphicon-list-alt"></i>
                  <span class="label label-warning">NEW</span> Documentation
                </a>
              </li>
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="" class="user-image" alt="User Image">
                  <span class="hidden-xs"></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="" class="img-circle" alt="User Image">
                    <p>
                      {{ config('app.name') }}
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a class="btn btn-default btn-flat" href="{{ url('admin/logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="@{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>

                      
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
  </nav>
</header>