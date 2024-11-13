<?php
include 'connect.php';


$posts_edit= $posts_edit= isset($_GET['posts_edit']) ? $_GET['posts_edit'] : 'no';

if(isset($_GET['post_edit'])){

$post_id=$_GET['post_edit'];

$post_title=$_POST['post_title'];
$post_contant=$_POST['post_contant'];

$image=$_FILES['image']['name'];
$image_thp_name=$_FILES['image']['tmp_name'];
$image_folder='../college/post/'.$image;


$stmt= $con->prepare("UPDATE `post` SET `post_title` = ?, `post_contant` = ?, `main_image` = ? WHERE `post_id` = ?");
$stmt->execute(array($post_title, $post_contant, $image, $post_id));
        if($stmt){
          move_uploaded_file($image_thp_name,$image_folder);
  
          echo
          "<script>
          alert('Successfully Add');
          document.location.href = 'index.php'; </script>";
        
        }

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

<?php 

$id= $_GET['post_ed'];

$sel= $con->prepare("SELECT * FROM `post` WHERE post_id = '$id' ; ");
$sel->execute(array());
$post=$sel->fetch();


?>
<!-- Edit Post Modal -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPostModalLabel">Edit Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPostForm" method="POST" action="post_edit.php?post_edit=<?= $id;?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="editPostTitle">Title</label>
                        <input type="text" id="editPostTitle" name="post_title" value="<?= $post['post_title'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="editPostContent">Content</label>
                        <textarea id="editPostContent" name="post_contant" class="form-control" rows="5"><?= $post['post_contant'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editPostImage">Image</label>
                        <input type="file" id="newsImage" class="form-control-file" name="image">
                    </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="index.php">Close</a>
                <button type="submit" name="send" class="btn btn-primary">Save Changes</button>

                </form>
                
            </div>
        </div>
    </div>




<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
