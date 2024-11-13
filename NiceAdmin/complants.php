<?php
include 'connect.php';

$do= isset($_GET['do']) ? $_GET['do'] : 'complan';
if(isset($_POST['submit'])) {
       
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $phone=$_POST['subject']; 

        $stmt= $con->prepare("INSERT INTO `complints`(`name`, `email`, `message`, `phone`) 
        VALUES ('$name','$email','$message','$phone');"); 
        $stmt->execute(array());
        header("Location: pages-contact.php");

  } 
  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>صفحة التواصل</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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
      <h1>الشكاوى</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
          <li class="breadcrumb-item">الصفحات</li>
          <li class="breadcrumb-item active">الشكاوى</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">
          <div class="card p-4">
          
                  
<form  action="?do=done" method="post" enctype="multipart/form-data">
<div class="row gy-4">

<div class="col-md-6">
  <input placeholder="الاسم" name="name" type="text" tabindex="1" class="form-control" required autofocus>
  </div>

                <div class="col-md-6 ">

  <input placeholder="البريد الالكتروني" name="email" type="email" class="form-control" required tabindex="2">
  </div>

<div class="col-md-6 ">
  <input placeholder="رقم الهاتف" type="text" class="form-control" required name="subject" tabindex="4">
  </div>

<div class="col-md-12">
  <textarea name="message" placeholder="اكتب شكوتك" class="form-control" required tabindex="5"></textarea>
  </div>


<div class="col-md-12 text-center">
  <div class="error-message"></div>
  <input type="submit" name="submit" value="ارسال" class="btn btn-primary" >
  </div>

</div>
            </form>

          </div>

        </div>

      </div>

    </section>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>