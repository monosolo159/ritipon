<div class="row">

  <?php foreach ($memberList as $bkey): ?>

  <div class="col-lg-3 col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><i class="fa fa-flag-o red"></i><strong><?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?></strong></h2>
      </div>
      <div class="panel-body">
        <div class="row">
            <div class="col-md-6" style="text-align:right">
                ชื่อ-นามสกุล :
            </div>
            <div class="col-md-6">
                <?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?>
            </div>
            <div class="col-md-6" style="text-align:right">
                วันที่สมัคร :
            </div>
            <div class="col-md-6">
                <?php echo $bkey['member_regdate'] ?>
            </div>
        </div>
        <center><a class="btn btn-info btn-block" href="<?php echo site_url('Home/bookMember/'.$bkey['member_id']) ?>">รายการหนังสือ</a></center>

      </div>
    </div>
  </div>

  <?php endforeach; ?>

</div>
