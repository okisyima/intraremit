<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/user') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>RT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Intra</b>remit</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li>
            <a href="{{ url('/forbidden') }}" class="btn btn-info">Page1</a>
          </li>
          <li>
            <a href="#" class="btn btn-warning">Page2</a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user fa-lg"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                <p>
                  Im User Intra - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">
                    <i class="fa fa-edit"></i>
                    Change Password
                  </a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">
                    <i class="fa fa-sign-out"></i> Sign out
                  </a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>