
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>แก้ไขสมาชิก</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Member/memberEdit',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">ชื่อ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="member_fname" value="<?php echo $memberOne[0]['member_fname'] ?>" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">นามสกุล <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="member_lname" value="<?php echo $memberOne[0]['member_lname'] ?>" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">ที่อยู่ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="member_address" value="<?php echo $memberOne[0]['member_address'] ?>" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">เบอร์โทร <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="member_tel" value="<?php echo $memberOne[0]['member_tel'] ?>" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">บันทึก</button>
                            </div>
                        </div>
                        <input type="hidden" name="member_id" value="<?php echo $memberOne[0]['member_id'] ?>">
                    <?php echo form_close(); ?>

              </div>
            </div>
          </div><!--/col-->
        </div>
