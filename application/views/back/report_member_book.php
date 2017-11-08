<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong>จำนวนหนังสือ/สมาชิก</strong>
          <?php if (count($input)>0): ?>
            ตั้งแต่วันที่ <?php echo $input['date_start'] ?> ถึงวันที่ <?php echo $input['date_end'] ?>
          <?php endif; ?>
        </h2>
      </div>
      <div class="panel-body">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <div class="body">
              <?php echo form_open('/Admin/reportMemberBook'); ?>
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


          <?php if (count($input)>0): ?>

            <div class="card">

              <div class="body">
                <table class="table table-striped table-advance table-hover">
                 <tbody>
                    <tr>
                       <th>#</th>
                       <th>ชื่อ-นามสกุล</th>
                       <th>ที่อยู่</th>
                       <th>เบอร์โทร</th>
                       <th>วันที่สมัคร</th>
                       <th>USERNAME</th>
                       <th>จำนวนหนังสือ</th>
                    </tr>
                    <?php foreach ($memberList as $bkey): ?>
                      <tr onclick="window.location.href = '<?php echo site_url('Admin/memberEditForm/'.$bkey['member_id']) ?>';">
                         <td><?php echo $bkey['member_id'] ?></td>
                         <td><?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?></td>
                         <td><?php echo $bkey['member_address'] ?></td>
                         <td><?php echo $bkey['member_tel'] ?></td>
                         <td><?php echo $bkey['member_regdate'] ?></td>
                         <td><?php echo $bkey['member_username'] ?></td>
                         <td><?php echo $bkey['book_all'] ?></td>
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
