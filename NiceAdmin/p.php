
<a style="font-size: 30px; margin-left:100px;" href="forms-editors.php">new post</a>

<?php

use function PHPSTORM_META\type;

include 'connect.php';


$sel= $con->prepare("SELECT * FROM `post` ORDER BY post_id DESC ");
$sel->execute(array());
$images=$sel->fetchAll();

?>
<table style="margin-top: 45px;" border=2 cellspacing=5 cellpadding= 10>
    <tr><th colspan="3" ><h1>المنشورات</h1></th></tr>
    <tr>
      <th><h2>العنوان</h2></th>
      <th><h2>اتصال</h2></th>
      <th><h2>النوع</h2></th>
      <th><h2>الصورة الاولى</h2></th>
      <th colspan="2"><h2>باقي الصور</h2></th>
    </tr>
    <?php foreach($images as $image){
      $images = json_decode($image["main_image"]);
      $first_image = $images[0];?>
      <tr>
        <td><h3><?= $image['post_title'];?></h3></td>
        <td><h3><?= $image['post_contant'];?></h3></td>
        <td><h3><?= $image['type'];?></h3></td>
        <td>
          <img src="post/<?php echo $first_image; ?>" width=200 >
       </td> 
       <td>
       <?php foreach(json_decode($image["main_image"]) as $imag) :?>
          <img src="post/<?php echo $imag; ?>" width=200 >
        <?php endforeach; ?>
       </td> 
      </tr>
   <?php } ?>
        
</table>
  
<a href="p.php">كل المنشورات</a>