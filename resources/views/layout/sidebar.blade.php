<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Im User Intra</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="{{ url('/user') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview menu">
          <a href="#">
            <i class="fa fa-edit"></i> <span>H2H Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Route::is('/jsonMessage') ? 'active' : '' }}">
              <a href="{{ url('/jsonMessage') }}"><i class="fa fa-circle-o"></i> Json Message</a>
            </li>
            <li>
              <a href="{{ url('/dataBalance') }}"><i class="fa fa-circle-o"></i> Data Balance</a></li>
            <li class="#">
              <a href="{{ url('/dataInquiry') }}"><i class="fa fa-circle-o"></i> Data Inquiry</a>
            </li>
            <li>
              <a href="{{ url('/dataTransactionTwo') }}"><i class="fa fa-circle-o"></i> Data Transaction2</a>
            </li>
            <li>
              <a href="{{ url('/dataCheck') }}"><i class="fa fa-circle-o"></i> Data Check</a>
            </li>
          </ul>
        </li>
        <li class="treeview menu">
        <a href="#">
            <i class="fa fa-share"></i> <span>Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <ul class="treeview-menu">
                <li class="">
                  <a href="{{ url('/balance') }}"><i class="fa fa-circle-o"></i> Balance</a>
                </li>
                <li>
                  <a href="{{ url('/history') }}"><i class="fa fa-circle-o"></i> History</a>
                </li>
            </ul>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>