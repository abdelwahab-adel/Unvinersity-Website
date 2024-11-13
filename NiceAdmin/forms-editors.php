<?php
include 'connect.php';
$do= isset($_GET['do']) ? $_GET['do'] : 'post';

    if(isset($_POST['submit'])) {

        $post_title=$_POST['post_title'];
        $post_contant=$_POST['post_contant'];
        $type=$_POST['type'];
        

        $filesarray=array();
        if($_FILES["uploadImageFile"]["error"] === 4){
          echo "<script> alert('Image Does Not Exist'); </script>" ;
        }
         else{
         for($i=0;$i<count($_FILES["uploadImageFile"]["name"]);$i++){
          $fileName = $_FILES["uploadImageFile"]["name"][$i];
          $tmpName = $_FILES["uploadImageFile"]["tmp_name"][$i];
          $validImageExtension = ['jpg', 'jpeg', 'png'];
          $imageExtension = explode('.', $fileName);
          $imageExtension = strtolower(end($imageExtension));
          $newImageName= uniqid().'.'. $imageExtension;
          move_uploaded_file($tmpName, 'post/'.$newImageName);
          $filesarray[]=$newImageName;
          }
          if(!in_array($imageExtension, $validImageExtension)){
          // echo "<script> alert('Invalid Image '); </script>" ;
          }
           $filesarray=json_encode($filesarray);

          $stmt= $con->prepare("INSERT INTO `post`(`post_title`, `post_contant`, `type`, `main_image`) 
          VALUES ('$post_title','$post_contant','$type','$filesarray');"); 
          $stmt->execute(array());

           echo
           "<script>
           alert('Successfully Added');
           document.location.href = 'forms-editors.php'; </script>";
         }
;

  
    } 
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Editors - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
include 'aside.php'; 
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Postes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manage</li>
          <li class="breadcrumb-item active">Postes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <form  method="POST" enctype="multipart/form-data">
      <!-- action="?do=insert_post" -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Post</h5>
              <form >
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Post Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="post_title" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Main Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" onchange="showImageHereFunc();" multiple name="uploadImageFile[]" id="formFile">
                  </div>
                </div>

             
              </form>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Post Content</h5>

              <!-- Quill Editor Full -->
              <p>writer your post</p>
              <div class="row mb-3">
                  <div class="col-sm-10">
                    <textarea class="form-control" name="post_contant" style="height: 100px"></textarea>
                  </div>
                </div>

            </div>
          </div>

          <div class="card">
            <div class="card-body" class="form-check">
             
            <div style="margin-top: 17px;" class="form-check" class="col-sm-10 col-md-6">
                    <div  >
                        <input type="radio" value="مراكز وقطاعات" id="Centers" checked name="type">
                        <label for="Centers">مراكز وقطاعات</label>
                    </div>
                    <div style="margin-top: 12px;" >
                        <input type="radio" value="المناسبات" id="Occasions" name="type">
                        <label for="Occasions">المناسبات</label>
                    </div>
                    <div style="margin-top: 12px;">
                        <input type="radio" value="اخبار الجامعة" id="University" name="type">
                        <label for="University">اخبار الجامعة</label>
                    </div>
                </div>
                
            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- General Form Elements -->
                
                  <div class="row mb-3">
                    <div class="col-sm-10">
                      
        <input type="submit" name="submit" class="btn btn-primary" value="New Post">
                    </div>
                  </div>
            </div>
            </div>
            

        </div>
       </form>

       <a href="../news.php">all post</a>

          </div>
 
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>