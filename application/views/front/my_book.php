
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>ค้นหา</strong></h2>
                <a left class="btn btn-success pull-right" href="<?php echo site_url('Home/bookAddForm'); ?>">เพิ่มหนังสือ</a>
              </div>
              <div class="panel-body">
                <?php echo form_open('Home/myBook',array('class' => 'navbar-form')); ?>
                  <input class="form-control" placeholder="ค้นหา" name="search" type="text">
                <?php echo form_close(); ?>


              </div>
            </div>
          </div>

          <?php foreach ($bookList as $bkey): ?>

          <div class="col-lg-3 col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong><?php echo $bkey['book_name'] ?></strong></h2>
              </div>
              <div class="panel-body">

                <div class="row">
                    <div class="col-md-6" style="text-align:right">
                        รหัสหนังสือ :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['book_code'] ?>
                    </div>
                    <div class="col-md-6" style="text-align:right">
                        ผู้เขียน :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['book_author'] ?>
                    </div>
                    <div class="col-md-6" style="text-align:right">
                        หมวดหมู่ :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['category_name'] ?>
                    </div>
                    <div class="col-md-6" style="text-align:right">
                          ชั้นวาง :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['shelf_name'] ?>
                    </div>
                    <div class="col-md-6" style="text-align:right">
                        โรงพิมพ์ :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['book_publisher'] ?>
                    </div>
                    <div class="col-md-6" style="text-align:right">
                        สมาชิก :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?>
                    </div>
                    <div class="col-md-6" style="text-align:right">
                        หน้า :
                    </div>
                    <div class="col-md-6">

                        <a class="btn btn-success" href="<?php echo site_url('Home/pageList/'.$bkey['book_id']); ?>"><i class="fa fa-plus-square-o"></i> / <?php echo $bkey['book_all_page'] ?></a>

                    </div>
                    <div class="col-md-6" style="text-align:right">
                        อ่าน :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['book_all_read'] ?>
                    </div>
                    <div class="col-md-6" style="text-align:right">
                        คะแนน(5) :
                    </div>
                    <div class="col-md-6">
                        <?php echo number_format($bkey['book_score'],2) ?> <a class="btn btn-info" href="<?php echo site_url('Home/bookComment/'.$bkey['book_id']) ?>">อ่านคอมเมนท์</a>
                    </div>
                </div>
                <br>
                <center>
                  <div class="btn-group">
                      <a class="btn btn-info" href="<?php echo site_url('Home/bookDetail/'.$bkey['book_id']) ?>"><i class="icon_search"></i></a>
                      <a class="btn btn-warning" href="<?php echo site_url('Home/bookEditForm/'.$bkey['book_id']); ?>"><i class="icon_pencil-edit"></i></a>
                      <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Books/bookDelFront/'.$bkey['book_id']); ?>';}"><i class="icon_close_alt2"></i></a>
                  </div>
                </center>


              </div>
            </div>
          </div>

          <?php endforeach; ?>
        </div>
