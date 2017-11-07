
        <div class="row">

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
                      <a href="<?php echo site_url('Home/bookMember/'.$bkey['member_id']); ?>"><?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?></a>


                    </div>
                    <div class="col-md-6" style="text-align:right">
                        หน้า :
                    </div>
                    <div class="col-md-6">
                        <?php echo $bkey['book_all_page'] ?>
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
                        <?php echo number_format($bkey['book_score'],2) ?>
                    </div>
                </div>
                <center><a class="btn btn-info btn-block" href="<?php echo site_url('Home/bookDetail/'.$bkey['book_id']) ?>">รายละเอียด</a></center>

              </div>
            </div>
          </div>

          <?php endforeach; ?>

        </div>
