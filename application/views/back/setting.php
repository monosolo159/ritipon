
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>ตั้งค่า</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Admin/updateSetting',array('class'=>'form-validate form-horizontal')); ?>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หน้าแรก <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea class="form-control ckeditor" name="setting_home" rows="6" required><?php echo $setting[0]['setting_home'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">ติดต่อเรา <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea class="form-control ckeditor" name="setting_contact" rows="6" required><?php echo $setting[0]['setting_contact'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">บันทึก</button>
                            </div>
                        </div>

                    <?php echo form_close(); ?>

              </div>
            </div>
          </div><!--/col-->
        </div>
