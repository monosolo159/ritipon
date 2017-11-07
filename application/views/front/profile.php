        <div class="row">
          <section class="panel">
              <header class="panel-heading tab-bg-primary ">
                  <ul class="nav nav-tabs">
                      <li class="active">
                          <a data-toggle="tab" href="#profile">ข้อมูลส่วนตัว</a>
                      </li>
                      <li class="">
                          <a data-toggle="tab" href="#editprofile">แก้ไขข้อมูลส่วนตัว</a>
                      </li>
                      <li class="">
                          <a data-toggle="tab" href="#editpassword">แก้ไขรหัสผ่าน</a>
                      </li>
                  </ul>
              </header>
              <div class="panel-body">
                  <div class="tab-content">
                      <div id="profile" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-2" style="text-align:right">
                                ชื่อ-สกุล :
                            </div>
                            <div class="col-md-10">
                                <?php echo $profile[0]['member_fname'].' '.$profile[0]['member_lname'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="text-align:right">
                                ที่อยู่ :
                            </div>
                            <div class="col-md-10">
                                <?php echo $profile[0]['member_address'] ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-2" style="text-align:right">
                                วันที่สมัคร :
                            </div>
                            <div class="col-md-10">
                                <?php echo $profile[0]['member_regdate'] ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-2" style="text-align:right">
                                เบอร์โทร :
                            </div>
                            <div class="col-md-10">
                                <?php echo $profile[0]['member_tel'] ?>
                            </div>
                          </div>
                      </div>
                      <div id="editprofile" class="tab-pane">
                        <?php echo form_open('/Member/memberEditFront',array('class'=>'form-validate form-horizontal')); ?>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">ชื่อ <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="text" name="member_fname" value="<?php echo $profile[0]['member_fname'] ?>" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">นามสกุล <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="text" name="member_lname" value="<?php echo $profile[0]['member_lname'] ?>" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">ที่อยู่ <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="text" name="member_address" value="<?php echo $profile[0]['member_address'] ?>" required />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">เบอร์โทร <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="text" name="member_tel" value="<?php echo $profile[0]['member_tel'] ?>" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">บันทึก</button>
                                    </div>
                                </div>
                                <input type="hidden" name="member_id" value="<?php echo $profile[0]['member_id'] ?>">
                            <?php echo form_close(); ?>
                      </div>
                      <div id="editpassword" class="tab-pane">
                        <?php echo form_open('/Member/memberEditFront',array('class'=>'form-validate form-horizontal')); ?>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">USERNAME </label>
                                    <div class="col-lg-10">
                                        <?php echo $profile[0]['member_username'] ?>
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
                                <input type="hidden" name="member_id" value="<?php echo $profile[0]['member_id'] ?>">
                            <?php echo form_close(); ?>
                      </div>
                  </div>
              </div>
          </section>
        </div>
