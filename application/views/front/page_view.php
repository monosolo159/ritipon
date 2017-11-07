
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>หนังสือ</strong></h2>
                <a left class="btn btn-default pull-right" href="<?php echo site_url('Admin/pageList/'.$pageOne[0]['book_id']); ?>">กลับ</a>
              </div>
              <div class="panel-body">

                <?php echo form_open('/Books/pageEdit',array('class'=>'form-validate form-horizontal')); ?>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">หน้า </label>
                            <div class="col-lg-10">
                                <?php echo $pageOne[0]['book_page_order'] ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">เนื้อหา </label>
                            <div class="col-lg-10">
                                <?php echo $pageOne[0]['book_page_detail'] ?>
                            </div>
                        </div>
                    <?php echo form_close(); ?>

              </div>
            </div>
          </div><!--/col-->
        </div>
