
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>แก้ไขรหัสผ่านสมาชิก</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Member/memberEdit',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">USERNAME </label>
                            <div class="col-lg-10">
                                <?php echo $memberOne[0]['member_username'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">PASSWORD<span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="member_password" required />
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
