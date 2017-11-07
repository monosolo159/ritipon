
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>แก้ไขสำนักพิมพ์</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Books/publisherEdit',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">สำนักพิมพ์ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="publisher_name" value="<?php echo $publisherOne[0]['publisher_name'] ?>" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">ที่อยู่ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="publisher_address" value="<?php echo $publisherOne[0]['publisher_address'] ?>" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">เบอร์โทร <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="publisher_tel" value="<?php echo $publisherOne[0]['publisher_tel'] ?>" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">บันทึก</button>
                            </div>
                        </div>
                      <input type="hidden" name="publisher_id" value="<?php echo $publisherOne[0]['publisher_id'] ?>">
                    <?php echo form_close(); ?>

              </div>
            </div>
          </div><!--/col-->
        </div>
