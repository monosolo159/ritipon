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

          <div class="nav search-row" id="top_menu">
              <!--  search form start -->
              <ul class="nav top-menu">
                  <li>
                    <?php echo form_open('Home/booksList',array('class' => 'navbar-form')); ?>
                      <input class="form-control" placeholder="ค้นหา" name="search" type="text">
                    <?php echo form_close(); ?>
                  </li>
              </ul>
              <!--  search form end -->
          </div>

          <div class="nav notification-row">
              <!-- notificatoin dropdown start-->
              <ul class="pull-right top-menu">
                  <!-- user login dropdown start-->

                  <?php if (isset($_SESSION['MEMBER_ID'])): ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <!-- <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span> -->
                            <span class="username"><?php echo $_SESSION['MEMBER_FNAME'].' '.$_SESSION['MEMBER_LNAME'] ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo site_url('Home/profile') ?>"><i class="icon_profile"></i> โปรไฟล์</a>
                            </li>
                            <li class="eborder-top">
                                <a href="<?php echo site_url('Home/myBook') ?>"><i class="fa fa-book"></i> หนังสือของฉัน</a>
                            </li>
                            <li class="eborder-top">
                                <a href="<?php echo site_url('Home/myBookComingRead') ?>"><i class="fa fa-book"></i> หนังสือที่ยังอ่านไม่จบ</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Member/logout'); ?>"><i class="icon_key_alt"></i> ออกจากระบบ</a>
                            </li>
                        </ul>
                    </li>

                  <?php else: ?>
                    <li >
                      <?php echo form_open('Member/login',array('class' => 'navbar-form')); ?>
                      <!-- <div class="row" style="display: table-cell;vertical-align: middle;"> -->
                        <div class="col-md-4">
                          <div class="form-group ">
                                  <input class="form-control" name="member_username" placeholder="USERNAME" type="text" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group ">
                                  <input class="form-control" name="member_password" placeholder="PASSWORD" type="password" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-default btn-sm" type="submit">เข้าสู่ระบบ</button>
                          <button class="btn btn-default btn-sm" type="button" onclick="location.href='<?php echo site_url('Home/register') ?>';">สมัครสมาชิก</button>
                        </div>
                      <!-- </div> -->
                      <?php echo form_close(); ?>
                    </li>
                  <?php endif; ?>

              </ul>
              <!-- notificatoin dropdown end-->
          </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar"  class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">

          <li >
            <a class="" href="<?php echo site_url('Home') ?>">
              <i class="fa fa-home"></i>
              <span>หน้าแรก</span>
            </a>
          </li>
          <li class="">
            <a class="" href="<?php echo site_url('Home/memberList') ?>">
              <i class="fa fa-book"></i>
              <span>รายการหนังสือ</span>
            </a>
          </li>
          <li class="">
            <a class="" href="<?php echo site_url('Home/Contact') ?>">
              <i class="fa fa-question-circle"></i>
              <span>ติดต่อเรา</span>
            </a>
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
