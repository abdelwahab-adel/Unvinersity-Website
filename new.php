

<?php

include 'conn.php'; 
include 'nav.php';
if(isset($_GET['pos'])){
  $id = $_GET['pos'];


$sel= $con->prepare("SELECT * FROM `post` WHERE post_id = '$id' ; ");
$sel->execute(array());
$post=$sel->fetch();


$images = json_decode($post["main_image"]);
$first_image = $images[0];


$count=-1;

?>
    <div class="container" style="margin-top: 1%;">
      <div class="row">
        <!-- Left Sidebar: Years list and Date Picker -->
        <div class="col-md-2 bg-white py-4" >
          <div class="sidebar">
            <h4>أرشيف الاخبار</h4>
             
            <p class="post-date bg-green rounded text-white px-2"><a href="news.php">الذهاب الى الارشيف</a></p>
          </div>
        </div>

        <div class="col-md-10">
          <div class="post card post-card-with-image">
            <div class="card-body" >
              <h3 class="card-title-single-post mt-2 mb-3"><?= $post['post_title'];?></h3>
              <p class="post-date bg-green rounded text-white px-2"><?= $post['post_date'];?></p>
              <?php
$images = json_decode($post["main_image"]);
$first_image = $images[0];
?>



<div id="carouselExampleIndicators" style="width: 100%; height:20%;" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <?php foreach($images as $index => $image) : ?>
            <?php if ($index == 0) continue; ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index; ?>" aria-label="Slide <?= $index + 1; ?>"></button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img src="NiceAdmin/post/<?=$first_image;?>"  class="d-block w-100 img-fluid post-image" alt="Image">
        </div>
        <?php foreach($images as $index => $image) : ?>
            <?php if ($index == 0) continue; ?>
            <div class="carousel-item">
                <img src="NiceAdmin/post/<?= $image; ?>" class="d-block w-100 img-fluid post-image" alt="Image">
            </div>
        <?php endforeach; ?>
    </div>
    <?php if (count($images) > 1) : ?>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    <?php endif; ?>
</div>
        
              </div>
              <div class="content-single-post">
                  <p style="margin: -1% 3% 1% 3%;"><?= $post['post_contant'];?></p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

<?php
include 'footer.php';
?>




