<?php

include 'conn.php';  


$sel= $con->prepare("SELECT * FROM words ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$words=$sel->fetch();


include 'nav.php';

?>
    <div dir="ltr" class="container" style="margin-top: 2%;">
      <div class="row">
        <div class="post card post-card-with-image">
          <div class="card-body">
            <h3 class="card-title-single-post mt-2 mb-3">كلمة رئيس الجامعة</h3>
            <hr class="custom-hr">
            <img src="assets/images/boss.jpg" alt="Image" class="img-fluid post-image"/>
            <h4>رئيس جامعة الاقصر الدكتور /<br> حمدي محمد حسين</h4>
            <div class="content-single-post">
            <p style="text-align: end;"><?= $words['unv_words'];?>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

<?php
include 'footer.php';
?>