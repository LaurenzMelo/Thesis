<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Side</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="AdminLTE-2.4.2/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="AdminLTE-2.4.2/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption|Sanchez|Ovo|Montserrat|Raleway|Montserrat+Alternates|Lato|Open+Sans|Ubuntu|PT+Sans" rel="stylesheet">
       
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <a href="admin.php" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="Images/admin.png" class="user-image" alt="Admin icon">
                <span class="hidden-xs">Mr. Emyrson Aninzo</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="Images/admin.png" class="img-circle" alt="Admin icon">

                  <p>
                    Mr. Emyrson Aninzo - Owner
                    <small>since 2008</small>
                  </p>
                </li>

                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Accounts</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Reports</a>
                    </div>
                  </div>
                </li>

                <li class="user-footer">
                  <div class="text-center">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="Images/admin.png" class="img-circle" alt="Admin icon">
          </div>
          <div class="pull-left info">
            <p>Mr. Emyrson Aninzo</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Manage System</li>

          <li class="active"><a href="#"><i class="fa fa-money"></i> <span>Pending Payment</span></a></li>
          <li><a href="#"><i class="fa fa-address-book-o"></i> <span>Reserved Dates and Rooms</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-ellipsis-v"></i> <span>Guests Details</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Checked-in Guests</a></li>
              <li><a href="#">Cancellation Details</a></li>
              <li><a href="#">Adjustment Details</a></li>
              <li><a href="#">Inquiries</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-plus-square-o"></i> <span>Add Rooms</span></a></li>
        </ul>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Main Page
          <small>Navigate</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!--------------------------
          | Your Page Content Here |
          -------------------------->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        by UE Thesis Group
      </div>
      <strong>Copyright &copy; 2017 <a href="#">Blue Spruce Beach Resort</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="pull-right-container">
                      <span class="label label-danger pull-right">30%</span>
                    </span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 30%"></div>
                </div>
              </a>
            </li>
          </ul>

        </div>
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
          </form>
        </div>
      </div>
    </aside>
    <div class="control-sidebar-bg"></div>
  </div>

  <script src="AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="AdminLTE-2.4.2/dist/js/adminlte.min.js"></script>
  </body>
</html>