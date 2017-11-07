
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>เพิ่มหน้าหนังสือ</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Books/pageAdd',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หน้า <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="number" name="book_page_order" required />
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">เนื้อหา <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea class="form-control ckeditor" name="book_page_detail" rows="6" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <input type="hidden" name="book_id" value="<?php echo $this->uri->segment(3) ?>">
                                <button class="btn btn-primary" type="submit">บันทึก</button>
                            </div>
                        </div>

                    <?php echo form_close(); ?>

              </div>
            </div>
          </div><!--/col-->
        </div>
