<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="<?php echo site_url() ?>" class="logo">หนังสือส่วนบุคคล<span class="lite">ออนไลน์</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <!-- <span class="profile-ava">
                <img alt="" src="img/avatar1_small.jpg">
              </span> -->
              <span class="username"><?php echo $_SESSION['ADMIN_FNAME'].' '.$_SESSION['ADMIN_LNAME'] ?></span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="<?php echo site_url('Admin/logout'); ?>"> ออกจากระบบ</a>
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

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_book"></i>
              <span>หนังสือ</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="<?php echo site_url('Admin/bookList') ?>">หนังสือ</a></li>
              <li><a class="" href="<?php echo site_url('Admin/categoryList') ?>">หมวดหมู่</a></li>
              <li><a class="" href="<?php echo site_url('Admin/shelfList') ?>">ชั้นวาง</a></li>
            </ul>
          </li>

          <li >
            <a class="" href="<?php echo site_url('Admin/memberList') ?>">
              <i class="icon_profile"></i>
              <span>สมาชิก</span>
            </a>
          </li>
          <li >
            <a class="" href="<?php echo site_url('Admin/settingForm') ?>">
              <i class="fa fa-cog"></i>
              <span>ตั้งค่า</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_piechart"></i>
              <span>รายงาน</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="<?php echo site_url('Admin/reportNewBook') ?>">หนังสือใหม่</a></li>
              <li><a class="" href="<?php echo site_url('Admin/reportSumRead') ?>">หนังสือที่ถูกอ่าน</a></li>
              <li><a class="" href="<?php echo site_url('Admin/reportMemberBook') ?>">จำนวนหนังสือ/สมาชิก</a></li>
            </ul>
          </li>
          <!-- <li class="">
            <a class="" href="<?php echo site_url('Admin/report') ?>">
              <i class="icon_piechart"></i>
              <span>รายงาน</span>
            </a>
          </li> -->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
