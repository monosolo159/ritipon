
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>รายการสมาชิก</strong></h2>
                <a left class="btn btn-success pull-right" href="<?php echo site_url('Admin/memberAddForm'); ?>">เพิ่ม</a>

              </div>
              <div class="panel-body">

                <table class="table table-striped table-advance table-hover">
                 <tbody>
                    <tr>
                       <th></i>#</th>
                       <th></i>ชื่อ-นามสกุล</th>
                       <th></i>ที่อยู่</th>
                       <th></i>เบอร์โทร</th>
                       <th></i>วันที่สมัคร</th>
                       <th></i>USERNAME</th>
                       <th></i>PASSWORD</th>

                       <th></i>จัดการ</th>
                    </tr>
                    <?php foreach ($memberList as $bkey): ?>
                      <tr>
                         <td><?php echo $bkey['member_id'] ?></td>
                         <td><?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?></td>
                         <td><?php echo $bkey['member_address'] ?></td>
                         <td><?php echo $bkey['member_tel'] ?></td>
                         <td><?php echo $bkey['member_regdate'] ?></td>
                         <td>
                           <?php echo $bkey['member_username'] ?>
                         </td>
                         <td>
                           <a class="btn btn-warning" href="<?php echo site_url('Admin/memberPassEditForm/'.$bkey['member_id']); ?>"><i class="icon_pencil-edit"></i> Password</a>
                         </td>
                         <td>
                          <div class="btn-group">
                            <a class="btn btn-warning" href="<?php echo site_url('Admin/memberEditForm/'.$bkey['member_id']); ?>"><i class="icon_pencil-edit"></i></a>
                            <a class="btn btn-danger" href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Member/memberDel/'.$bkey['member_id']); ?>';}"><i class="icon_close_alt2"></i></a>
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
