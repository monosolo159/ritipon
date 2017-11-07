<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <a class="btn btn-warning pull-right" data-toggle="modal" href="#myModal2">LIKE</a>
        <?php if (isset($_SESSION['MEMBER_ID'])): ?>
          <?php echo form_open('/Books/readLater'); ?>
          <input type="hidden" name="book_id" value="<?php echo $pageList[0]['book_id'] ?>">
          <input type="hidden" name="member_id" value="<?php echo $_SESSION['MEMBER_ID'] ?>">
          <input type="hidden" name="book_read_later_status" value="2">
          <input type="hidden" name="book_read_later_id" value="<?php echo $fav[0]['book_read_later_id'] ?>">

          <?php if ($fav[0]['book_read_later_status']==2): ?>
            <button class="btn btn-primary pull-right" disabled>อ่านจบแล้ว</button>
          <?php else: ?>
            <button class="btn btn-default pull-right" type="submit">อ่านจบแล้ว</button>
          <?php endif; ?>
          <?php echo form_close(); ?>

          <?php echo form_open('/Books/readLater'); ?>
          <input type="hidden" name="book_id" value="<?php echo $pageList[0]['book_id'] ?>">
          <input type="hidden" name="member_id" value="<?php echo $_SESSION['MEMBER_ID'] ?>">
          <input type="hidden" name="book_read_later_status" value="1">
          <input type="hidden" name="book_read_later_id" value="<?php echo $fav[0]['book_read_later_id'] ?>">
          <?php if ($fav[0]['book_read_later_status']==1): ?>
            <button class="btn btn-primary pull-right" disabled>ยังอ่านไม่จบ</button>
          <?php else: ?>
            <button class="btn btn-default pull-right" type="submit">ยังอ่านไม่จบ</button>
          <?php endif; ?>
          <?php echo form_close(); ?>

        <?php endif; ?>
        <h2><i class="fa fa-flag-o red"></i><strong>เนื้อหา</strong></h2>

      </div>
      <div class="panel-body">

      <?php echo form_open('/Books/bookEdit',array('class'=>'form-validate form-horizontal')); ?>
      <div class="form-group ">
        <div class="col-lg-12">
          <?php echo $pageList[0]['book_page_detail'] ?>
        </div>
      </div>
      <?php echo form_close(); ?>
      <div class="row" style="text-align:center;">
        <?php echo $links; ?>
      </div>
    </div>
  </div>

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
          <input type="hidden" name="book_id" value="<?php echo $pageList[0]['book_id'] ?>">
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

</div><!--/col-->
</div>
