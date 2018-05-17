<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Invoease, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
   <!--  <link rel="shortcut icon" href="img/favicon.png">
 -->
 <title>Invoease</title>
       <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/assets/toastr-master/toastr.css ')}}" >
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::asset('assets/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
     <link rel="stylesheet" href="{{URL::asset('assets/assets/data-tables/DT_bootstrap.css')}}" /> 
    <!--right slidebar-->
   <!--  <link href="{{URL::asset('assets/css/slidebars.css')}}" rel="stylesheet"> -->
    <link href="{{URL::asset('assets/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/sweetalert.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/loader.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style-responsive.css')}}" rel="stylesheet" />
   @stack('css')
  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <i class="fa fa-bars"></i>
          </div>
          <!--logo start-->
          <a href="" class="logo" >Invo<span>ease</span></a>
          <!--logo end-->
        <!--   <div id="notification" > </div> -->
                    
          <div class="top-nav ">
              <div class="nav pull-right text-center top-menu">
                 
                  <a  href="{{ url('/logout') }}"><i class="fa fa-power-off logouticon"></i><br>Logout</a>
                 
              </div>
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
                          <span>Customers</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('customers.create')}}">Add Customer</a></li>
                          <li><a  href="{{route('customers.index')}}">View Customers</a></li>
                          <!-- <li><a  href="#">Reports</a></li>
                           -->
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;"> 
                          <i class="fa fa-cogs"></i>
                          <span>Invoice</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('invoices.create')}}">Generate Invoice</a></li>
                          <li><a  href="{{route('invoices.index')}}">View All</a></li>
                        <!--   <li><a  href="#">Reports</a></li>
                          -->
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Payments</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('payments.create')}}">Make Payment</a></li>
                          <li><a  href="{{route('payments.index')}}">View Payment</a></li>
                 <!--          <li><a  href="#">Reports</a></li>
                                                -->
                      </ul>
                  </li>
               
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Expenses</span>
                      </a>
                      <ul class="sub">
                         
                          <li><a  href="{{route('expenses.index')}}">View Expenses</a></li>
                          <!-- <li><a  href="#">Reports</a></li>
                                                -->
                      </ul>
                  </li>  
                      
                   <li>
                      <a href="http://invoease.com/products" >
                          <i class="fa fa-tasks"></i>
                          <span>Products</span>
                      </a>
                     <!-- <ul class="sub">
                         
                          <li><a  href="http://invoease.com/products">View Products</a></li>
                        
                      </ul>-->
                  </li>  
                 

                  <!--multi level menu start-->
                  <li class="sub-menu" style="display:none;">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                         <li><a  href="{{ url('/taxes') }}">Tax Setting</a></li>
                          
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
          <section class="wrapper">
              <!-- page start-->
                @yield('content')
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->


      <!--footer start-->
     <!--  <footer class="site-footer">
          <div class="text-center">
              2016 &copy; Webninjaz.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
      <!--footer end-->
  </section>
  </body>
 <script src="{{URL::asset('js/loader.js')}}"></script>
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
   <script src="{{URL::asset('js/vue.min.js')}}"></script>
    <script src="{{URL::asset('js/vue-resource.min.js')}}"></script>

<!--  <script src="{{URL::asset('js/notification.js')}}"></script> -->
      @stack('scripts')

</html>
