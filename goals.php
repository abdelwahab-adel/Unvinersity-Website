<?php

include 'conn.php';  


$sel= $con->prepare("SELECT * FROM words ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$words=$sel->fetch();


include 'nav.php';
?>

<div class="container" style="background: url('assets/images/graduation.jpg') no-repeat center center/cover; position: relative; padding: 20px ; height: 50%; margin-top: 2%;">
      <div class="row">
        <!-- University History Section -->
        <div class="post card post-card-with-image" style="background-color: rgba(255, 255, 255, 0.7); position: relative; z-index: 1;">
          <div class="card-body">
            <h3 class="card-title-single-post mt-2 mb-3">أهداف الجامعة</h3>
            <hr class="custom-hr">
            <div class="content-single-post">
              <div class="row">
                <div class="col-md-12"  >
                <p style="display: flex; text-align: center;"><?= $words['unv_goals'];?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
include 'footer.php';
?>