<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url(); ?>assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css">
  <link href="<?php echo base_url(); ?>assets/css/widgets.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->



      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <span class="profile-ava">
                <img alt="" src="img/avatar1_small.jpg">
              </span>
              <span class="username">Jenifer Smith</span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>

            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
              <i class="icon_house_alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Forms</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="form_component.html">Form Elements</a></li>
              <li><a class="" href="form_validation.html">Form Validation</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>HEADER</strong></h2>
              </div>
              <div class="panel-body">

                BODY

              </div>
            </div>
          </div><!--/col-->
        </div>

      </section>
      <div class="text-right">
        <div class="credits">
          <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
  </section>
  <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url(); ?>assets/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js" ></script>
<!-- jQuery full calendar -->
<<script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="<?php echo base_url(); ?>assets/js/calendar-custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js" ></script>
<script src="<?php echo base_url(); ?>assets/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
<script src="<?php echo base_url(); ?>assets/js/easy-pie-chart.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>assets/js/xcharts.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/gdp-data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/sparklines.js"></script>
<script src="<?php echo base_url(); ?>assets/js/charts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
</body>
</html>
