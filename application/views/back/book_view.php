
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>หนังสือ</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Books/bookEdit',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">รหัสหนังสือ </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['book_name'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หนังสือ </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['book_code'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">นักเขียน </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['book_author'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หมวดหมู่ </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['category_name'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">ชั้นวาง </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['shelf_name'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">สำนักพิมพ์ </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['book_publisher'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">รายละเอียด </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['book_detail'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">สมาชิก </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['member_fname'].' '.$bookOne[0]['member_lname'] ?>
                            </div>
                        </div>

                    <?php echo form_close(); ?>

              </div>
            </div>
          </div><!--/col-->
        </div>
