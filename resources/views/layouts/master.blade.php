<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

    <title>Blank</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::asset('assets/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
     <link rel="stylesheet" href="{{URL::asset('assets/assets/data-tables/DT_bootstrap.css')}}" /> 
    <!--right slidebar-->
    <link href="{{URL::asset('assets/css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style-responsive.css')}}" rel="stylesheet" />
  @stack('css')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <i class="fa fa-bars"></i>
          </div>
          <!--logo start-->
          <a href="#" class="logo" >Invoice<span>Management</span></a>
          <!--logo end-->
          
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <!-- <img alt="" src="img/avatar1_small.jpg"> -->
                          <span class="username">                    <!-- Authentication Links -->
                       
                           
                                {{ Auth::user()->name }}
                         
                   
                   </span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          
                          <li><a href="{{ url('/logout') }}"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>

                  <!-- user login dropdown end -->
                  <li class="sb-toggle-right">
                      <i class="fa  fa-align-right"></i>
                  </li>
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="{{ url('/dashboard') }}"">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-laptop"></i>
                          <span>Layouts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="boxed_page.html">Boxed Page</a></li>
                          <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                          <li><a  href="header-color.html">Different Color Top bar</a></li>
                          <li><a  href="mega_menu.html">Mega Menu</a></li>
                          <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                          <li><a  href="email_template.html" target="_blank">Email Template</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-book"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="modal.html">Modal</a></li>
                          <li><a  href="toastr.html">Toastr Notifications</a></li>
                          <li><a  href="widget.html">Widget</a></li>
                          <li><a  href="slider.html">Slider</a></li>
                          <li><a  href="nestable.html">Nestable</a></li>
                          <li><a  href="tree.html">Tree View</a></li>
                          <li><a  href="font_awesome.html">Font Awesome</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">Grids</a></li>
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                          <li><a  href="draggable_portlet.html">Draggable Portlet</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                          <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                          <li><a  href="form_wizard.html">Form Wizard</a></li>
                          <li><a  href="form_validation.html">Form Validation</a></li>
                          <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                          <li><a  href="inline_editor.html">Inline Editor</a></li>
                          <li><a  href="image_cropping.html">Image Cropping</a></li>
                          <li><a  href="file_upload.html">Multiple File Upload</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                          <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                          <li><a  href="editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-envelope"></i>
                          <span>Mail</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="inbox.html">Inbox</a></li>
                          <li><a  href="inbox_details.html">Inbox Details</a></li>
                      </ul>
                  </li>
                  
                 
                  <li>
                      <a  href="{{URL::asset('')}}">
                          <i class="fa fa-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>

                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
                <div class="contents"> @yield('content') </div>
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <!-- <img alt="" src="img/chat-avatar2.jpg" class="media-object"> -->
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <!-- <img alt="" src="img/chat-avatar.jpg" class="media-object"> -->
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <!-- <img alt="" src="img/pro-ac-1.png" class="media-object"> -->
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <!-- <img alt="" src="img/avatar1.jpg" class="media-object"> -->
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <!-- <img alt="" src="img/mail-avatar.jpg" class="media-object"> -->
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress progress-striped active">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 &copy; Webninjaz.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
      <script src="{{URL::asset('assets/js/jquery.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{URL::asset('assets/js/jquery.dcjqaccordion.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.scrollTo.min.js')}}"></script>  
    <script src="{{URL::asset('assets/js/slidebars.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/respond.min.js')}}" ></script>

     <script src="{{URL::asset('assets/js/bootstrap-validator.min.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
  <!--Form Wizard-->
 
  <script src="{{URL::asset('assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/js/form-validation-script.js')}}" type="text/javascript"></script>

 <script src="{{URL::asset('assets/js/common-scripts.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{URL::asset('assets/js/common-scripts.js')}}"></script>
 @stack('scripts')


  </body>
</html>
