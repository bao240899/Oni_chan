<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost:8080/Oni_chan/admin/index" class="brand-link">
      <img src="http://localhost:8080/Oni_chan/Public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Oni_Chan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://localhost:8080/Oni_chan/Public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
                  <a href="http://localhost:8080/Oni_chan/admin/getuser" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dash Board
                    </p>
                  </a>
                </li>

          <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                      Manga
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="http://localhost:8080/Oni_chan/admin/getmanga" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Get Manga</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="http://localhost:8080/Oni_chan/admin/Addmanga" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Manga</p>
                      </a>
                    </li>
                  </ul>
                </li>
            
          <li class="nav-item has-treeview menu-open">
                  <a href="http://localhost:8080/Oni_chan/admin/getuser" class="nav-link">
                    <i class="nav-icon fa fa-user-alt"></i>
                    <p>
                      User
                    </p>
                  </a>
                </li>
            
          <li class="nav-item has-treeview menu-open">
                  <a href="http://localhost:8080/Oni_chan/admin/getcomment" class="nav-link">
                    <i class="nav-icon fa fa-comment"></i>
                    <p>
                      Comment
                    </p>
                  </a>
                </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>