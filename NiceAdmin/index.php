<?php
include 'connect.php';
$do= $do= isset($_GET['do']) ? $_GET['do'] : 'no';

$mass= $mass= isset($_GET['mass']) ? $_GET['mass'] : 'no';

$event= $event= isset($_GET['event']) ? $_GET['event'] : 'no';

if(isset($_GET['do'])){
    
  $students_number=$_POST['students_number'];
  $staff_number=$_POST['staff_number'];
  $graduates_number=$_POST['graduates_number'];

  // $stmt= $con->prepare("UPDATE `number` SET `students_number`=?,`staff_number`=?,`graduates_number`=? WHERE id = 7"); 
  // $stmt->execute(array($students_number,$staff_number,$graduates_number));
  
  if(($_POST['students_number'])!='') {

    $stmt= $con->prepare("UPDATE `number` SET `students_number`=? WHERE id = (SELECT MAX(id) FROM `number`)"); 
    $stmt->execute(array($students_number));
    
    
    }
  if(($_POST['staff_number'])!='') {

    $stmt= $con->prepare("UPDATE `number` SET `staff_number`=? WHERE id = (SELECT MAX(id) FROM `number`)"); 
    $stmt->execute(array($staff_number));
    
      
    }
  if(($_POST['graduates_number'])!='') {

    $stmt= $con->prepare("UPDATE `number` SET`graduates_number`=? WHERE id = (SELECT MAX(id) FROM `number`) "); 
    $stmt->execute(array($graduates_number));  
        
     }



  echo
  "<script>
  alert('Successfully Update');
  document.location.href = 'index.php'; </script>";

 } 

 if(isset($_GET['mass'])){
    
  $unv_words=$_POST['unv_words'];
  $unv_history=$_POST['unv_history'];
  $unv_goals=$_POST['unv_goals'];
  $unv_vision=$_POST['unv_vision'];
  $unv_message=$_POST['unv_message'];

  // $stmt= $con->prepare("INSERT INTO `words`( `unv_words`, `unv_history`, `unv_goals`, `unv_vision`, `unv_message`) 
  // VALUES ('$unv_words','$unv_history','$unv_goals','$unv_vision','$unv_message');"); 
  // $stmt->execute(array());

    if(($_POST['unv_words'])!='') {

    $stmt= $con->prepare("UPDATE `words` SET`unv_words`=? WHERE id = (SELECT MAX(id) FROM `words`) "); 
    $stmt->execute(array($unv_words));  
        
     }

     if(($_POST['unv_history'])!='') {

      $stmt= $con->prepare("UPDATE `words` SET`unv_history`=? WHERE id = (SELECT MAX(id) FROM `words`) "); 
      $stmt->execute(array($unv_history));  
          
       }

       if(($_POST['unv_goals'])!='') {

        $stmt= $con->prepare("UPDATE `words` SET`unv_goals`=? WHERE id = (SELECT MAX(id) FROM `words`) "); 
        $stmt->execute(array($unv_goals));  
            
         }
         
         if(($_POST['unv_vision'])!='') {
   
          $stmt= $con->prepare("UPDATE `words` SET`unv_vision`=? WHERE id = (SELECT MAX(id) FROM `words`) "); 
          $stmt->execute(array($unv_vision));  
           
        }

         
        if(($_POST['unv_message'])!='') {

          $stmt= $con->prepare("UPDATE `words` SET`unv_message`=? WHERE id = (SELECT MAX(id) FROM `words`) "); 
          $stmt->execute(array($unv_message));  
           
        }
      
      

  echo
  "<script>
  alert('Successfully Update');
  document.location.href = 'index.php'; </script>";

 } 

 if(isset($_GET['event'])){
     
       $event_link=$_POST['event_link'];

        $event_logo=$_FILES['event_logo']['name'];
        $event_logo_thp_name=$_FILES['event_logo']['tmp_name'];
        $event_logo_folder='event/'.$event_logo;
      

  $stmt= $con->prepare("INSERT INTO `eventt`( `event_logo`, `event_link`) 
  VALUES ('$event_logo','$event_link');"); 
  $stmt->execute(array());

 if($stmt){
                move_uploaded_file($event_logo_thp_name,$event_logo_folder);
                
              }

  echo
  "<script>
  alert('Successfully Add');
  document.location.href = 'index.php'; </script>";

 } 
?><!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>صفحة مسؤول الجامعة</title>
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
  <style>
    textarea{
      resize: none;
    }
  </style>
</head>
  
<body dir="rtl">
<?php
include 'aside.php'; 
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>صفحة التحكم</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
        <li class="breadcrumb-item active">صفحة التحكم</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
      <?php


$sel= $con->prepare("SELECT * FROM `number` ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$number=$sel->fetch();

?>
<form action="index.php?do" method="post">
        <div class="row">
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <input type="text" name="staff_number" class="form-control card-title" placeholder=" اعضاء هيئة التدريس" >
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $number['staff_number'];?></h6>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <input type="text" name="students_number" class="form-control card-title" placeholder=" الطلاب" >

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $number['students_number'];?></h6>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->
                      <!-- Sales Card -->
                      <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                          <div class="card-body">
                            <input type="text" name="graduates_number" class="form-control card-title" placeholder="الخريجين" >
          
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person"></i>
                              </div>
                              <div class="ps-3">
                                <h6><?= $number['graduates_number'];?></h6>
          
                              </div>
                            </div>
                          </div>
          
                        </div>
                      </div>

                      <div style="margin-left: 400px; width:150px; " class="col-xxl-4 col-md-4">
                        <div  class="card info-card sales-card">
                          
                  <input s type="submit" name="submit" value="تعديل" class="btn btn-primary" >
                               
                        </div>
                      </div>
                      
                      
        </div>

        </form>
      </div>
    </div>
  <section class="events-section">
    <div class="row mb-3">
      
    <form action="index.php?event" method="post" enctype="multipart/form-data" > 
      <label for="inputNumber" class="col-sm-2 col-form-label">صورة الخبر</label>
      <div class="col-sm-10">
        <input class="form-control" name="event_logo" type="file" id="formFile">
      </div>
      <div class="row mb-3">
        <label for="inputNumber" class="col-sm-2 col-form-label">رابط الخبر</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="event_link" rows="1" style="margin-top: 35px; margin-left:-20%;" placeholder="الرابط"></textarea>
        </div>
      </div>  
          <div class="col-md-12 mt-4">
      <button type="submit" class="btn btn-primary">اضافة</button>
    </div>
    </form>
    </div>
  </section>


           <section class="section dashboard" style="margin-top: 35px;">
              <form action="index.php?mass" method="post">
                 <div class="row gy-4">
                   <div class="col-xl-6">
                      <textarea  class="form-control" style="margin-top: 10px;"name="unv_message" rows="4" placeholder="رسالة الجامعة"></textarea>
          
                      <textarea class="form-control" style="margin-top: 10px;" name="unv_history" rows="4" placeholder="تاريخ الجامعة"></textarea>
          
                      <textarea class="form-control" style="margin-top: 10px;" name="unv_goals" rows="4" placeholder="اهداف الجامعة"></textarea>
          
                      <textarea class="form-control" style="margin-top: 10px;" name="unv_vision" rows="4" placeholder="رؤية الجامعة"></textarea>
                      
                      <textarea class="form-control" style="margin-top: 10px;" name="unv_words" rows="4" placeholder="كلمة رئيس الجامعة"></textarea>
          
                    <div class="col-md-12 mt-4">
                      <button type="submit" class="btn btn-primary">تعديل</button>
                    </div>
                 </div>
               </form>
           </section>
  
  
</main>

                      <!-- End Sales Card -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong></strong>. All Rights Reserved
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>