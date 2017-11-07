
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>รายละเอียดหนังสือ</strong></h2>
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
                            <label for="cemail" class="control-label col-lg-2">ชั้นวาง <span class="required">*</span></label>
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
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หน้า </label>
                            <div class="col-lg-10">
                                <?php echo $bookOne[0]['book_all_page'] ?>
                                <?php if ($bookOne[0]['book_all_page']>0): ?>
                                  <a left class="btn btn-success" href="<?php echo site_url('Home/pageDetail/'.$bookOne[0]['book_id']); ?>">อ่าน</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">อ่าน </label>
                            <div class="col-lg-10">

                                <?php echo $bookOne[0]['book_all_read'] ?>

                            </div>
                        </div>


                    <div class="form-group ">
                        <label for="cemail" class="control-label col-lg-2">คะแนน(5) </label>
                        <div class="col-lg-10">
                            <?php echo number_format($bookOne[0]['book_score'],2) ?>

                            <a class="btn btn-warning" data-toggle="modal" href="#myModal2">LIKE</a>


                        </div>
                    </div>
                    <?php echo form_close(); ?>

                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">LIKE</h4>
                                </div>
                                <?php echo form_open('/Books/bookLike',array('class'=>'form-validate form-horizontal')); ?>

                                  <div class="modal-body">
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">คะแนน <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                            <select class="form-control" name="book_like_score">
                                              <option value="5">5</option>
                                              <option value="4">4</option>
                                              <option value="3">3</option>
                                              <option value="2">2</option>
                                              <option value="1">1</option>
                                            </select>
                                              <!-- <textarea class="form-control ckeditor" name="book_like_score" rows="6" required></textarea> -->
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">ข้อความ <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control" name="book_like_comment" rows="6"></textarea>
                                          </div>
                                      </div>
                                      <input type="hidden" name="book_id" value="<?php echo $bookOne[0]['book_id'] ?>">
                                      <input type="hidden" name="member_id" value="<?php if(isset($_SESSION['MEMBER_ID'])){ echo $_SESSION['MEMBER_ID']; }else{ echo 0; } ?>">

                                  </div>
                                  <div class="modal-footer">
                                      <button data-dismiss="modal" class="btn btn-default" type="button">ยกเลิก</button>
                                      <button class="btn btn-warning" type="submit"> บันทึก</button>
                                  </div>
                                <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div><!--/col-->
        </div>
