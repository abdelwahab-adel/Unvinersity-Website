<?php

include 'conn.php'; 
include 'nav.php';

if(isset($_POST['submit'])) {
  
  if(isset($_POST['search'])) {
    $search = "%" . $_POST['search'] . "%";
    $sel = $con->prepare("SELECT * FROM `post` WHERE post_title LIKE ?  OR post_contant LIKE ?  ORDER BY post_id DESC  ");
    $sel->execute([$search,$search]);
    $posts = $sel->fetchAll();
    }
    
  if(($_POST['date'])!='') {
    $date = $_POST['date'];

    // Check if the input is a full date (day, month, year) or just a year
    if (strlen($date) > 4) {
        // Full date provided
        $sel = $con->prepare("SELECT * FROM `post` WHERE post_date = ? ORDER BY post_id DESC");
    } else {
        // Only year provided
        $sel = $con->prepare("SELECT * FROM `post` WHERE YEAR(post_date) = ? ORDER BY post_id DESC");
    }
    
    $sel->execute([$date]);
    $posts = $sel->fetchAll();
    
    }
    
    if(($_POST['date'])==''&&($_POST['search'])==''){
      $posts = []; // لا يتم عرض شيء إذا لم يتم إدخال شروط البحث
  }
}


?>

    <div class="container" style="padding-top: 20px;">
      <div class="row" style="margin-left: 5px; margin-right: 5px;">
        <div class="col-md-3 d-flex align-items-center">
          <h2 data-key="post">الأخبار التي تبحث عنها</h2>
        </div>
        <div class="col-md-6 d-flex justify-content-center"  style="width: 300px; height: 50px; justify-content: center; align-items: center; display:flex;  margin-left:13%; background-color:#19a564; border-radius: 5px;">
            <a class="form-inline my-2 my-lg-0" style="color:white; font-size:130%; font-weight:500;"  href="news.php">رجوع الي صفحة الاخبار</a>
         
        </div>
      </div>
    </div>
    

    <div class="container" style="padding-top: 10px; padding-bottom: 20px;">
      <div class="row">
      <?php foreach($posts as $post){
      $images = json_decode($post["main_image"]);
      $first_image = $images[0];?>

        <div class="col-md-4" style="margin-top: 1%;">
          <div class="post card">
            <div class="card-body">
            <a href="new.php?pos=<?= $post['post_id'];?>"><img src="NiceAdmin/post/<?=$first_image;?>" style="width: 100%; height:200px;" alt="" class="img-fluid" /></a>
              <h4 class="card-title text-truncate"><?= $post['post_title'];?></h4>
              <div class="d-flex justify-content-between">
                <p class="reading-time mb-0"><?= round((mb_strlen($post['post_contant'], 'UTF-8')/500));?> min read</p>
                <p class="date-posted mb-0 bg-green rounded text-white px-2"><?= $post['post_date'];?></p>
              </div>
            </div>
          </div>
        </div>        
        <?php }?>

      </div>

     
    </div>



<?php
include 'footer.php';
?>