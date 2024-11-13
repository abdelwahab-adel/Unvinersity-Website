<?php

include 'conn.php'; 
include 'nav.php';


$like= isset($_GET['like']) ? $_GET['like'] : '';
$limit= isset($_GET['limit']) ? $_GET['limit'] : 0;

$sel = $con->prepare("SELECT * FROM `post` ORDER BY post_id DESC LIMIT 6 OFFSET $limit;");
$sel->execute();
$posts=$sel->fetchAll();


?>

    <div class="container" style="padding-top: 20px;">
      <div class="row" style="margin-left: 5px; margin-right: 5px;">
        <div class="col-md-3 d-flex align-items-center">
          <h2 data-key="post">ارشيف الأخبار</h2>
        </div>
        <div class="col-md-6 d-flex justify-content-center" style="margin-left:2%;">
          <form class="form-inline my-2 my-lg-0" action="new_ser.php"  method="post" >
            <input class="form-control mr-sm-2" style="width: 400px;" name="search"  type="search" placeholder="Search" aria-label="Search">
            <input id="datePicker" class="form-control" style="height: 38px; width:50%;  margin-top:2%;" type="date" name="date"  placeholder="Select Date">
            <input type="submit" name="submit"  style="width: 30%; height:40%; margin-top:-8%; margin-left:70%; background-color:#19a564; color:white; border:none; border-radius: 5px; font-size:130%; " value="بحث عن أخبار">
      </form>
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
$LIMIT = 6;
$sel = $con->prepare("SELECT * FROM `post` ORDER BY post_id");
$sel->execute();
$rowCount = $sel->rowCount();
$totalPages = ceil($rowCount / $LIMIT);

$currentOffset = isset($_GET['limit']) ? intval($_GET['limit']) : 0;
$currentPage = ceil(($currentOffset + 1) / $LIMIT);

?>
<!-- Pagination -->
<?php
$currentOffset = isset($_GET['limit']) ? intval($_GET['limit']) : 0;
$currentPage = ceil(($currentOffset + 1) / $LIMIT);

$currentPageGroup = ceil($currentPage / 5);

?>

<div style="justify-content: center; display: flex">
    <nav aria-label="Page navigation example" style="margin-bottom: -3%;">
        <ul class="pagination">
            <li class="page-item">
                <?php if ($currentPageGroup > 1): ?>
                <a class="page-link" href="?limit=<?= max(0, ($currentPageGroup - 2) * 5 * $LIMIT); ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                <?php endif; ?>
            </li>
            <?php  
            $startPage = ($currentPageGroup - 1) * 5 + 1;
            
            $endPage = min($startPage + 4, $totalPages);
            
            for ($i = $startPage; $i <= $endPage; $i++) {
                $offset = ($i - 1) * $LIMIT;
                ?>
                <li class="page-item <?= ($i == $currentPage) ? 'active' : ''; ?>">
                    <a class="page-link" href="?limit=<?= $offset; ?>"> <?= $i; ?></a>
                </li>
                <?php 
            }
            ?>
            <li class="page-item">
                <?php if ($endPage < $totalPages): ?>
                <a class="page-link" href="?limit=<?= $endPage * $LIMIT; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                <?php endif; ?>
            </li>
        </ul>
    </nav>
</div>


<?php
include 'footer.php';
?>