<?php
include 'connect.php';
$do= $do= isset($_GET['do']) ? $_GET['do'] : 'sing';

$res= $do= isset($_GET['res']) ? $_GET['res'] : 'sing';

if(isset($_GET['do'])){
    
  $id=$_GET['do'];
  $stmt= $con->prepare("DELETE FROM `complints` WHERE compint_id = '$id' ;");
  $stmt->execute(array());
  header('location:pages-contact.php');

 } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Contact - NiceAdmin Bootstrap Template</title>
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
 
  <!-- ======= Sidebar ======= -->  
  <?php
include 'aside.php'; 
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Complants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Complants</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">
            <form  method="POST">
        <?php 

$sel= $con->prepare("SELECT * FROM `complints`ORDER BY compint_id DESC ");
$sel->execute(array());
$compls=$sel->fetchAll();


foreach($compls as $compl){
?>

          <div style="display:flex;" class="card">
            <div class="card-body p-4">
              <h6>الاسم : <?= $compl['name'];?></h6>
              <h6>البريد الالكتروني : <?= $compl['email'];?></h6>
              <h6>الشكوى : <?= $compl['message'];?></h6>
              <h6>رقم الهاتف : <?= $compl['phone'];?></h6>
              <h6 style=>التاريخ : <?= $compl['date'];?></h6> 
              
              <?php if($compl['status--enum']==1){
        // echo "<h6>";
        echo "<i style='padding-left: 450px; font-size:40px; color: blue; padding-bottom:10px; display: flex;' class='bi bi-send-arrow-up-fill'></i>";
        // echo "</h6>";
            }
            ?>
              <div class="col-12">
                      <a class="btn btn-primary w-100"  href="response.php?res=<?= $compl['compint_id'];?>">رد</a>
              </div>
              <div style="height: 10px;">
                      
                    </div>
              <div class="col-12">
                      <a class="btn btn-danger w-100" onclick="return confirm(' Are You Sure Delete?')" href="?do=<?= $compl['compint_id'];?>">مسح</a>
              </div>
            </div>
          </div>
          
<?php
}  
?>
</form>

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