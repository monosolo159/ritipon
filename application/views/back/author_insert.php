
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>เพิ่มนักเขียน</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Books/authorAdd',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">ชื่อ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="author_fname" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">นามสกุล <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="author_lname" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">นามแฝง <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="author_panel" required />
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
