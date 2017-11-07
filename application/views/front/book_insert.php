
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>เพิ่มหนังสือ</strong></h2>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Books/bookAddFront',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">รหัสหนังสือ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="book_name" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หนังสือ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " type="text" name="book_code" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">นักเขียน <span class="required">*</span></label>
                            <div class="col-lg-10">
                              <input class="form-control " type="text" name="book_author" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หมวดหมู่ <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <select class="form-control input-sm m-bot15" name="category_id" required>
                                    <?php foreach ($categoryList as $key): ?>
                                      <option value="<?php echo $key['category_id'] ?>"><?php echo $key['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">ชั้นวาง <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <select class="form-control input-sm m-bot15" name="shelf_id" required>
                                    <?php foreach ($shelfList as $key): ?>
                                      <option value="<?php echo $key['shelf_id'] ?>"><?php echo $key['shelf_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">สำนักพิมพ์ <span class="required">*</span></label>
                            <div class="col-lg-10">
                              <input class="form-control " type="text" name="book_publisher" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">รายละเอียด <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea class="form-control ckeditor" name="book_detail" rows="6" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <input type="hidden" name="member_id" value="<?php echo $_SESSION['MEMBER_ID'] ?>">
                                <button class="btn btn-primary" type="submit">บันทึก</button>
                            </div>
                        </div>

                    <?php echo form_close(); ?>

              </div>
            </div>
          </div><!--/col-->
        </div>
