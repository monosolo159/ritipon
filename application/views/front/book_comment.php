
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>คอมเมนท์</strong></h2>
              </div>
              <div class="panel-body">

                <table class="table table-striped table-advance table-hover">
                 <tbody>
                    <tr>
                      <th>สมาชิก</th>
                       <th>คะแนน</th>
                       <th>คอมเมนท์</th>
                    </tr>
                    <?php foreach ($comment as $bkey): ?>
                      <tr>
                        <td><?php echo $bkey['member_fname'].' '.$bkey['member_lname'] ?></td>

                         <td><?php echo $bkey['book_like_score'] ?></td>
                         <td><?php echo $bkey['book_like_comment'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                 </tbody>
              </table>

              </div>
            </div>
          </div><!--/col-->
        </div>
