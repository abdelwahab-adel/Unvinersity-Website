<?php

include 'conn.php';  


$sel= $con->prepare("SELECT * FROM words ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$words=$sel->fetch();


include 'nav.php';
?>

<div class="container" style=" margin-top: 2%;">
      <div class="row">
        <!-- University History Section -->
        <div class="post card post-card-with-image">
          <div class="card-body">
            <h3 class="card-title-single-post mt-2 mb-3">تاريخ الجامعة</h3>
            <hr class="custom-hr">
            <div class="content-single-post">
            <p style="text-align: center;"><?= $words['unv_history'];?>.</p>
            </div>
          </div>
        </div>
        

        <div class="post card post-card-with-image mt-4">
          <div class="card-body">
            <h3 class="card-title-single-post mt-2 mb-3">د/ محمد حمدي حسين </h3>
            <hr class="custom-hr">
            <div class="content-single-post">
              <div class="row">
                <div class="col-md-3">
                  <img src="assets/images/boss.jpg" alt="Dr. Muhammad Mahjoub Azouz" class="img-fluid rounded " style="height: 250px; width: 200px;">
                </div>
                <div class="col-md-8">
                  <h4>د / محمد محجوب عزوز</h4>
                  <p><strong>فترة:</strong><br> من 2022 حتي الان</p>
                  <p><strong>Open CV:</strong><br> The second president of Luxor University by Presidential Decree No. 560 of 2022</p>
                  <p>He held the position of Head of the Department of Botany and Microbiology in 2015 AD, then Vice Dean of the Faculty of Science for Postgraduate Studies in 2016 AD, then Dean of the Faculty of Science by Presidential Decree No. 32 in 2018 AD at South Valley University.</p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Dr. Muhammad Mahjoub Azouz Section -->
        <div class="post card post-card-with-image mt-4">
          <div class="card-body">
            <h3 class="card-title-single-post mt-2 mb-3">Dr. Muhammad Mahjoub Azouz</h3>
            <hr class="custom-hr">
            <div class="content-single-post">
              <div class="row">
                <div class="col-md-3">
                  <img src="assets/images/boss2.jpg" alt="Dr. Muhammad Mahjoub Azouz" class="img-fluid rounded " style="height: 250px; width: 200px;">
                </div>
                <div class="col-md-8">
                  <h4>Dr. Muhammad Mahjoub Azouz</h4>
                  <p><strong>Period:</strong><br> From 2020 to 2022</p>
                  <p><strong>Open CV:</strong><br> The first president of Luxor University by Presidential Decree No. 560 of 2020</p>
                  <p>He held the position of Head of the Department of Botany and Microbiology in 2015 AD, then Vice Dean of the Faculty of Science for Postgraduate Studies in 2016 AD, then Dean of the Faculty of Science by Presidential Decree No. 32 in 2018 AD at South Valley University.</p>
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