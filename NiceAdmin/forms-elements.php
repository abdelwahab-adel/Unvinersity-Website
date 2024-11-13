<?php
include 'connect.php';


$dsn = 'mysql:host=localhost;dbname=college';
$user = 'root';
$pass = '';
$option = array (
    PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
try {
    $conn = new PDO ($dsn,$user,$pass,$option);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo 'Connected';
} catch (PDOException $e) {
    echo 'FIled'.$e->getMessage();
}




$do= isset($_GET['do']) ? $_GET['do'] : 'college'; 

    if(isset($_POST['submit'])) {
     
    // if($_SERVER['REQUEST_METHOD']=='POST'){

      $name=$_POST['name'];
      $address=$_POST['address'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $m_color=$_POST['m_color'];
      $sec_color=$_POST['sec_color'];
      $about=$_POST['about'];

      $twitter=$_POST['twitter'];
      $facebook=$_POST['facebook'];
      $instagram=$_POST['instagram'];
      $linkedin=$_POST['linkedin'];


      $logo=$_FILES['logo']['name'];
      $logo_thp_name=$_FILES['logo']['tmp_name'];
      $logo_folder='../college/logo/'.$logo;

      $boss=$_FILES['boss']['name'];
      $boss_thp_name=$_FILES['boss']['tmp_name'];
      $boss_folder='../college/logo/'.$boss;

      $background=$_FILES['background']['name'];
      $background_thp_name=$_FILES['background']['tmp_name'];
      $background_folder='../college/logo/'.$background;
   
      $stmtt= $con->prepare("INSERT INTO `social`(`twitter_link`, `face_link`, `linked_link`, `instgram_link`) 
      VALUES ('$twitter','$facebook','$linkedin','$instagram');");
       $stmtt->execute(array());

       $stmttt= $con->prepare("SELECT * FROM `social` WHERE twitter_link=? && face_link=? && linked_link=? && instgram_link=?;");
       $stmttt->execute(array($twitter,$facebook,$linkedin,$instagram));

       $link = $stmttt->fetch(); 
       $social_id=$link['social_id'];

              $stmt= $con->prepare("INSERT INTO `college`(`name`, `logo`,`background`, `boss`, `address`, `phone`, `email`, `m_color`, `sec_color`, `about`, `social_id`)
              VALUES ('$name','$logo','$background','$boss','$address','$phone','$email','$m_color','$sec_color','$about',$social_id);"); 
              $stmt->execute(array());
              if($stmt){
                move_uploaded_file($logo_thp_name,$logo_folder);
                move_uploaded_file($background_thp_name,$background_folder);
                move_uploaded_file($boss_thp_name,$boss_folder);
                // echo "OKKKKKKKKKKK";
                // header('location: Home.php');
              }

              $stmtttt= $con->prepare("SELECT * FROM `college` WHERE name=? && logo=? && background=? && boss=? && address=? && phone=? && email=? && about=? && m_color=? && sec_color=? && social_id=?;");
              $stmtttt->execute(array($name,$logo,$background,$boss,$address,$phone,$email,$about,$m_color,$sec_color,$social_id)); 
       
              $college_id = $stmtttt->fetch(); 
              $admin_id=$college_id['college_id'];
       
              
              $admain_name=$_POST['admain_name'];
              $Password=sha1($_POST['Password']);
              

              $stmt= $conn->prepare("INSERT INTO `admin`(`admin_id`, `name`, `Password`) 
              VALUES ('$admin_id','$admain_name','$Password');"); 
              $stmt->execute(array());

              $insert = $conn->prepare("INSERT INTO `words`(`unv_message`, `unv_words`, `unv_goals`, `unv_vision`, `admin_id`) VALUES ( ' ', ' ', ' ', ' ', ?)");
              $insert->execute(array($admin_id ));

              $insertt = $conn->prepare("INSERT INTO `number`(`students_number`, `staff_number`, `graduates_number`, `colleges_number`, `admin_id`)
               VALUES ( ' ', ' ', ' ', ' ', ?)");
              $insertt->execute(array($admin_id ));
    

  
    }
  // }


    
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
    <h1>New College</h1>

    
    <h1><a href="../college/admin_college.php">Login Admin College</a></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">College</li>
          <li class="breadcrumb-item active">New</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">New College</h5>

              <!-- General Form Elements -->
              <form method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">College Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">College Logo</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="logo" type="file" id="formFile">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">College Boss</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="boss" type="file" id="formFile">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">College Background</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="background" type="file" id="formFile">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Main Color</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" name="m_color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Second Color</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" name="sec_color" id="exampleColorInput" value="#008000" title="Choose your color">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">About</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="about" style="height: 100px"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                  </div>
                </div>
    
                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                  </div>
                </div>
    
                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                  </div>
                </div>
    
                <div class="row mb-3">
                  <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                  </div>
                </div>
    
                <div class="row mb-3">
                  <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                  </div>
                </div>
    
                <div class="row mb-3">
                  <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                  </div>
                </div>
    
                <div class="row mb-3">
                  <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                  </div>
                </div>

                
    <div class="row mb-3">
    <div class="card-body">
                <h5 class="card-title">Admin</h5>
                  <div class="row"> 
                    <div class="col-sm-3 mt-3 ">
                      <input type="text" name="admain_name" class="form-control" id="inputText" placeholder="Admain_name">
                    </div>
                    <div class="col-sm-3 mt-3">
                      <input type="text" name="Password"  class="form-control" id="inputText" placeholder="Password">
                    </div>
                  </div> 
                  </div>
                  </div>
    
                <div class="text-center">
                  <!-- <button type="submit" class="btn btn-primary col-sm-2">Create</button> -->
        <input type="submit" name="submit" class="btn btn-primary" value="Create">
                  
                </div>
              </form>
            </div>
          </div>
      </div>
    </section>


    <!-- <section>
      <div class="row">
        <div class="col-lg-12">
          <form action="forms-elements.php">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Admin</h5>
                  <div class="row"> 
                    <div class="col-sm-3 mt-3 ">
                      <input type="text" class="form-control" id="inputText" placeholder="User Name">
                    </div>
                    <div class="col-sm-3 mt-3">
                      <input type="text" class="form-control" id="inputText" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary col-sm-2 mt-3">Add</button>
                  </div>  
               </div>  
            </div>
          </form>
        </div>
      </div>
    </section> -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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