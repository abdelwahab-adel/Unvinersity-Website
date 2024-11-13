<?php

include 'conn.php';  


$sel= $con->prepare("SELECT * FROM words ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$words=$sel->fetch();


include 'nav.php';
?>
<div class="container" style="background: url('assets/images/vision.jpg') no-repeat center center/cover; position: relative; padding: 20px; margin-top: 2%;">
      <div class="row">
        <!-- University Message Section -->
        <div class="post card post-card-with-image" style="background-color: rgba(255, 255, 255, 0.2); position: relative; z-index: 1;">
          <div class="card-body">
            <h3 class="card-title-single-post mt-2 mb-3 text-dark">رسالة الجامعة</h3>
            <hr class="custom-hr">
            <div class="content-single-post" style="color: #fff;">
            <p style="text-align: end;"><?= $words['unv_message'];?></p>
            </div>
            <h3 class="card-title-single-post mt-2 mb-3 text-dark">رؤية الجامعة</h3>
            <hr class="custom-hr">
            <div class="content-single-post" style="color: #fff;">
            <p style="text-align:end;"><?= $words['unv_vision'];?></p>
            </div>
          </div>
          </div>
        </div>
        </div>

<?php
include 'footer.php';
?>