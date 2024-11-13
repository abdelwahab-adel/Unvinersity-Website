<?php
include 'connect.php';
session_start();

if(isset($_GET['admin_id'])) {

        // الحصول على قيمة id
        $id = $_GET['admin_id'];

        // تخزين قيمة id في الجلسة
        $_SESSION['id'] = $id;

        // $sel = $con->prepare("SELECT * FROM `words` WHERE admin_id = ? LIMIT 1");
        // $sel->execute(array($_SESSION['id']));
        // $word = $sel->fetch();
        
        // if (!$word) {
 
        //     $insert = $con->prepare("INSERT INTO `words`(`id`, `unv_message`, `unv_words`, `unv_history`, `unv_goals`, `unv_vision`, `admin_id`) VALUES (NULL, '', '', '', '', '', ?)");
        //     $insert->execute(array($_SESSION['id'] ));
        // }


       
}

$admin_id = $_SESSION['id'];


$number= $number= isset($_GET['number']) ? $_GET['number'] : 'no';

$word= $word= isset($_GET['word']) ? $_GET['word'] : 'no';

$posts= $posts= isset($_GET['posts']) ? $_GET['posts'] : 'no';

$complen_del= $complen_del= isset($_GET['complen_del']) ? $_GET['complen_del'] : 'no';

$res= $res= isset($_GET['res']) ? $_GET['res'] : 'no';


$posts_ed= $posts_ed= isset($_GET['posts_ed']) ? $_GET['posts_ed'] : 'no';

$post_del= $post_del= isset($_GET['post_del']) ? $_GET['post_del'] : 'no';

if(isset($_GET['posts_ed'])){
    
    $id=$_GET['post_del'];
    $stmt= $con->prepare("DELETE FROM `post` WHERE post_id = '$id' && admin_id ='$admin_id' ;");
    $stmt->execute(array());
    
    echo
    "<script>
    alert('Successfully Delete');
    document.location.href = 'index.php'; </script>";
  
} 

if(isset($_GET['post_del'])){
    
    $id=$_GET['post_del'];
    $stmt= $con->prepare("DELETE FROM `post` WHERE post_id = '$id' && admin_id ='$admin_id' ;");
    $stmt->execute(array());
    
    echo
    "<script>
    alert('Successfully Delete');
    document.location.href = 'index.php'; </script>";
  
} 

if(isset($_GET['word'])){
    
    $section = $_POST['section'];
    $content = $_POST['content'];

  $stmt= $con->prepare("UPDATE `words` SET`$section`=? WHERE admin_id ='$admin_id' "); 
  $stmt->execute(array($content));  

echo
"<script>
alert('Successfully Update');
document.location.href = 'index.php'; </script>";

} 


if(isset($_GET['number'])){
    
    $section = $_POST['section'];
    $content = $_POST['content'];

  $stmt= $con->prepare("UPDATE `number` SET`$section`=? WHERE admin_id ='$admin_id' "); 
  $stmt->execute(array($content));  

echo
"<script>
alert('Successfully Update');
document.location.href = 'index.php'; </script>";

} 




if(isset($_GET['posts'])){
    
$post_title=$_POST['post_title'];
$post_contant=$_POST['post_contant'];

$image=$_FILES['image']['name'];
$image_thp_name=$_FILES['image']['tmp_name'];
$image_folder='../college/post/'.$image;


$stmt= $con->prepare("INSERT INTO `post`(`post_title`, `post_contant`, `main_image`,`admin_id`) 
VALUES ('$post_title','$post_contant','$image','$admin_id');"); 
$stmt->execute(array());
        if($stmt){
          move_uploaded_file($image_thp_name,$image_folder);
  
          echo
          "<script>
          alert('Successfully Add');
          document.location.href = 'index.php'; </script>";
        
        }

    }

if(isset($_GET['complen_del'])){
    
  $id=$_GET['complen_del'];
  $stmt= $con->prepare("DELETE FROM `complints` WHERE compint_id = '$id' && admin_id ='$admin_id' ;");
  $stmt->execute(array());
  header('location:index.php');

 } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
</head>

<body style="font-family: 'Lato', sans-serif;">
    <div class="container mt-5">
        <h1 class="mb-4">Admin Panel</h1>
        <h1 class="mb-4"><?= $admin_id;?></h1>
        <ul class="nav nav-tabs" id="adminTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="content-tab" data-toggle="tab" href="#content" role="tab"
                    aria-controls="content" aria-selected="true"><i class="fas fa-edit"></i> Content</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news"
                    aria-selected="false"><i class="fas fa-newspaper"></i> News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="complaints-tab" data-toggle="tab" href="#complaints" role="tab"
                    aria-controls="complaints" aria-selected="false"><i class="fas fa-comments"></i> Complaints</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false"><i class="fas fa-user"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts"
                    aria-selected="false"><i class="fas fa-tasks"></i> Posts</a>
            </li>
        </ul>
        <div class="tab-content" id="adminTabContent">
            <!-- Content Tab -->
            <div class="tab-pane fade show active" id="content" role="tabpanel" aria-labelledby="content-tab">

                <form id="contentForm" class="m-3" method="POST" action="index.php?word">
                    <div class="form-group">
                        <label for="section">Select Section</label>
                        <select id="section" name="section" class="form-control">
                            <option value="unv_goals">Goals</option>
                            <option value="unv_vision">Vision</option>
                            <option value="unv_message">Message</option>
                            <option value="unv_words">Word</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>

            <!-- News Tab -->
            <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
                <form id="newsForm" method="POST" action="index.php?posts" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="newsTitle">Title</label>
                        <input type="text" id="newsTitle" name="post_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="newsContent">Content</label>
                        <textarea name="post_contant" id="newsContent" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="newsImage">Image</label>
                        <input type="file" id="newsImage" class="form-control-file" name="image">
                    </div>
                    <button type="submit" id="postNewsBtn" class="btn btn-primary">Post News</button>
                </form>
                <div id="newsPosts" class="mt-4">
                    <!-- Dynamic news posts will be loaded here -->
                </div>
            </div>

            <!-- Complaints and Suggestions Tab -->
            <div class="tab-pane fade" id="complaints" role="tabpanel" aria-labelledby="complaints-tab">
                <div id="complaintsList" class="mt-4">
                    <!-- Static complaints for demonstration -->
                    <?php 

$sel = $con->prepare("SELECT * FROM `complints` WHERE admin_id ='$admin_id'");
$sel->execute(array());
$compls=$sel->fetchAll();


foreach($compls as $compl){
?>
                    <!-- Complaint 1 -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title"><?= $compl['email'];?></h5>
                                <div>
                                    <?php if($compl['status--enum']==1){
        // echo "<h6>";
        echo "<a class='btn btn-info btn-sm mr-2'>Response</a>";
        // echo "</ha>";
            }
            ?>
                                    <a class="btn btn-danger btn-sm mr-2"
                                        onclick="return confirm(' Are You Sure Delete?')"
                                        href="?complen_del=<?= $compl['compint_id'];?>">DELETE</a>

                                    <a class="btn btn-primary btn-sm mr-2"
                                        href="response.php?res=<?= $compl['compint_id'];?>">Answer</a>

                                </div>
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">Date: <?= $compl['date'];?>|Sender:
                                <?= $compl['name'];?>|Phone : <?= $compl['phone'];?></h6>
                            <p class="card-text"> Complints : <?= $compl['message'];?></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>


            <!-- Profile Tab
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/150" alt="Admin Photo" class="admin-photo mb-3">
                        <h5 class="card-title">Admin Name</h5>
                        <p class="card-text">admin@example.com</p>
                        <button type="button" class="btn btn-primary">Edit Profile</button>
                    </div>
                </div>
            </div> -->


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form id="contentForm" class="m-3" method="POST" action="index.php?number">
                    <div class="form-group">
                        <label for="section">Select Section</label>
                        <select id="section" name="section" class="form-control">
                            <option value="students_number">Students Number</option>
                            <option value="staff_number">Staff Number</option>
                            <option value="graduates_number">Graduates Number</option>
                            <option value="colleges_number">Colleges Number</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>


            <!-- Posts Control Tab -->
            <div class="tab-pane fade" id="posts" role="tabpanel" aria-labelledby="posts-tab">

                <!-- Post cards -->

                <?php 

$sel= $con->prepare("SELECT * FROM `post` WHERE admin_id = ? ORDER BY post_id DESC");
$sel->execute(array($admin_id));
$posts=$sel->fetchAll();


foreach($posts as $post){
?>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title"><?= $post['post_title'];?></h5>
                            <div>
                                <a class="btn btn-secondary btn-sm"
                                    href="post_edit.php?post_ed=<?= $post['post_id'];?>">Edit</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm(' Are You Sure Delete?')"
                                    href="?post_del=<?= $post['post_id'];?>">DELETE</a>

                            </div>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $post['post_date'];?></h6>
                        <p class="card-text"><?= $post['post_contant'];?></p>
                    </div>
                </div> <?php }?>
                <!-- More post cards here -->

            </div>



            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>