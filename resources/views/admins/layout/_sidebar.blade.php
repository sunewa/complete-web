<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p></p>
            {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
          </div>
        </div>
        

          <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="{{ Request::is('admin/dashboard') ? "active":"" }}"><a href=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>          
          <li class="{{ Request::is('admin/slider') ? "active":"" }}{{ Request::is('admin/slider/*') ? "active":"" }}">
            <a href="{{ route('admin.blog.index') }}"><i class="fa fa-image"></i> <span>Blog</span></a>
          </li>
          <li class="{{ Request::is('admin/slider') ? "active":"" }}{{ Request::is('admin/slider/*') ? "active":"" }}">
            <a href="{{ route('admin.blog.create') }}"><i class="fa fa-image"></i> <span>Blog Create</span></a>
          </li>
          <li class="header">General</li>
          <li class="{{ Request::is('admin/notice') ? "active":"" }}{{ Request::is('admin/notice/*') ? "active":"" }}">
            <a href=""><i class="fa fa-bullhorn"></i> <span>Notice</span></a>
          </li>
         
        </ul>
      
    </section>
        <!-- /.sidebar -->
</aside>