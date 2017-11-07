
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>รายการหนังสือ</strong></h2>
                <a left class="btn btn-success pull-right" href="<?php echo site_url('Admin/shelfAddForm'); ?>">เพิ่ม</a>

              </div>
              <div class="panel-body">

                <table class="table table-striped table-advance table-hover">
                 <tbody>
                    <tr>
                       <th></i>#</th>
                       <th></i>ชั้นวาง</th>
                       <th></i>จัดการ</th>
                    </tr>
                    <?php foreach ($shelfList as $bkey): ?>
                      <tr>
                         <td><?php echo $bkey['shelf_id'] ?></td>
                         <td><?php echo $bkey['shelf_name'] ?></td>
                         <td>
                           <div class="btn-group">
                               <a class="btn btn-warning" href="<?php echo site_url('Admin/shelfEditForm/'.$bkey['shelf_id']); ?>"><i class="icon_pencil-edit"></i></a>
                               <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Books/shelfDel/'.$bkey['shelf_id']); ?>';}"><i class="icon_close_alt2"></i></a>
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
