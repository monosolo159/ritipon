<?php if (isset($input)): ?>
 มี.
<?php endif; ?>
<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong>หนังสือใหม่</strong>
          <?php if (isset($input)): ?>
            ตั้งแต่วันที่ <?php echo $input['date_start'] ?> ถึงวันที่ <?php echo $input['date_end'] ?>
          <?php endif; ?>
        </h2>
      </div>
      <div class="panel-body">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <div class="body">
              <?php echo form_open('/Admin/reportNewBook'); ?>
              <div class="row clearfix">
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="form-line">

                      <input type="text" name="date_start" class="datepicker form-control" maxlength="10" required placeholder="2017/05/30">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="date_end" class="datepicker form-control" maxlength="10" required placeholder="2017/05/30">
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="form-line">
                      <button type="submit" class="btn waves-effectc btn-success" large>ดูรายงาน</button>
                    </div>
                  </div>
                </div>


              </div>
              <?php echo form_close(); ?>


            </div>
          </div>


          <?php if (isset($input)): ?>

            <div class="card">

              <div class="body">
                <table class="table table-striped table-advance table-hover">
                 <tbody>
                    <tr>
                       <th>รหัสหนังสือ</th>
                       <th>ชื่อหนังสือ</th>
                       <th>เนื้อหา/หน้า</th>
                       <th>ผู้เขียน</th>
                       <th>หมวดหมู่</th>
                       <th>ชั้นวาง</th>
                       <th>โรงพิมพ์</th>
                       <th>สมาชิก</th>
                       <th>วันที่</th>

                    </tr>
                    <?php foreach ($bookList as $bkey): ?>
                      <tr>
                         <td><?php echo $bkey['book_code'] ?></td>
                         <td><?php echo $bkey['book_name'] ?></td>
                         <td><?php echo $bkey['book_all_page'] ?></td>
                         <td><?php echo $bkey['book_author'] ?></td>
                         <td><?php echo $bkey['category_name'] ?></td>
                         <td><?php echo $bkey['shelf_name'] ?></td>
                         <td><?php echo $bkey['book_publisher'] ?></td>
                         <td><?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?></td>
                         <td><?php echo $bkey['book_date'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                 </tbody>
              </table>
              </div>
            </div>
          <?php endif; ?>

        </div>

      </div>
    </div>
  </div><!--/col-->
</div>
