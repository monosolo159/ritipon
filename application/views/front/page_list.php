
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>รายการหน้าหนังสือ</strong></h2>
                <a left class="btn btn-success pull-right" href="<?php echo site_url('Home/pageAddForm/'.$this->uri->segment(3)); ?>">เพิ่ม</a>

                <a left class="btn btn-default pull-right" href="<?php echo site_url('Home/myBook'); ?>">กลับ</a>

              </div>
              <div class="panel-body">

                <table class="table table-striped table-advance table-hover">
                 <tbody>
                    <tr>
                       <th>#</th>
                       <th>หน้า</th>
                       <th>จัดการ</th>
                    </tr>
                    <?php foreach ($pageList as $bkey): ?>
                      <tr>
                         <td><?php echo $bkey['book_page_id'] ?></td>
                         <td>
                           <?php echo form_open('Books/pageEdit'); ?>
                           <div class="row">
                             <div class="col-md-6">
                               <input type="text" class="form-control" name="book_page_order" value="<?php echo $bkey['book_page_order'] ?>">
                             </div>
                             <div class="col-md-6">
                               <input type="hidden" name="book_page_id" value="<?php echo $bkey['book_page_id'] ?>">
                               <input type="hidden" name="book_id" value="<?php echo $bkey['book_id'] ?>">
                               <button type="submit" class="btn btn-default">บันทึก</button>
                             </div>
                           </div>
                           <?php echo form_close(); ?>
                         </td>
                         <td>
                          <div class="btn-group">
                              <a class="btn btn-info" href="<?php echo site_url('Home/pageView/'.$bkey['book_page_id']); ?>"><i class="icon_search"></i></a>
                              <a class="btn btn-warning" href="<?php echo site_url('Home/pageEditForm/'.$bkey['book_page_id']); ?>"><i class="icon_pencil-edit"></i></a>
                              <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Books/pageDelFront/'.$bkey['book_id'].'/'.$bkey['book_page_id']); ?>';}"><i class="icon_close_alt2"></i></a>
                          </div>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                 </tbody>
              </table>

              </div>
            </div>
          </div><!--/col-->
        </div>
