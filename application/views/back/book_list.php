
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>รายการหนังสือ</strong></h2>
                <a left class="btn btn-success pull-right" href="<?php echo site_url('Admin/bookAddForm'); ?>">เพิ่ม</a>

              </div>
              <div class="panel-body">

                <table class="table table-striped table-advance table-hover">
                 <tbody>
                    <tr>
                       <th>รหัสหนังสือ</th>
                       <th>ชื่อหนังสือ</th>
                       <th>เนื้อหา/หน้า</th>
                       <th>ผู้เขียน</th>
                       <th>หมวดหมู่</th>
                       <th>ชั้นวาง</th>
                       <th>โรงพิมพ์</th>
                       <th>สมาชิก</th>
                       <th>จัดการ</th>
                    </tr>
                    <?php foreach ($bookList as $bkey): ?>
                      <tr>
                         <td><?php echo $bkey['book_code'] ?></td>
                         <td><?php echo $bkey['book_name'] ?></td>
                         <td>
                           <a class="btn btn-success" href="<?php echo site_url('Admin/pageList/'.$bkey['book_id']); ?>"><i class="fa fa-plus-square-o"></i> / <?php echo $bkey['book_all_page'] ?></a>
                         </td>
                         <td><?php echo $bkey['book_author'] ?></td>
                         <td><?php echo $bkey['category_name'] ?></td>
                         <td><?php echo $bkey['shelf_name'] ?></td>
                         <td><?php echo $bkey['book_publisher'] ?></td>
                         <td><?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?></td>
                         <td>
                          <div class="btn-group">
                              <a class="btn btn-info" href="<?php echo site_url('Admin/bookView/'.$bkey['book_id']); ?>"><i class="icon_search"></i></a>
                              <a class="btn btn-warning" href="<?php echo site_url('Admin/bookEditForm/'.$bkey['book_id']); ?>"><i class="icon_pencil-edit"></i></a>
                              <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Books/bookDel/'.$bkey['book_id']); ?>';}"><i class="icon_close_alt2"></i></a>
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
