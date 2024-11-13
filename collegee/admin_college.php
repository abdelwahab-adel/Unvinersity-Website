<?php
include 'connect.php';
$do= isset($_GET['do']) ? $_GET['do'] : 'login';

if(isset($_POST['submit'])) {
     
    $name= $_POST['name'];
    $password = $_POST['password'];
    $hashedPass=sha1($password);

    $stmt= $con->prepare("SELECT * FROM `admin` WHERE password=? && name=? ;");
    $stmt->execute(array($hashedPass,$name));
    $row = $stmt->fetch();

    if($stmt->rowCount()>0){
        echo
        "<script>
        alert('Successfully Login');
        document.location.href = '../college admin?admin_id=" . $row['admin_id'] . "'; </script>";
        
    }


else{
  ?>

   <h3 style="padding-left:15%; color:red; padding-top:7%; font-size: 25px;" >Error In Login</h3>
  <?php
}  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Admin login page for Faculty of Computers and Information">
    <meta name="author" content="Inovatik">

    <!-- Website Title -->
    <title>Admin Login</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body>
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <!-- Login Section -->
    <div id="login" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Admin Login</h2>
                    <p class="p-heading p-large text-center">Enter your credentials to access the admin panel.</p>
                    <form id="loginForm" action="?do=done" method="POST"  data-toggle="validator">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="name" required>
                            <label class="label-control" for="name">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control-input" id="password" required>
                            <label class="label-control" for="password">Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                <label class="custom-control-label" for="rememberMe">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control-submit-button" value="LOGIN">

                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <p class="p-small">Forgot your password? <a href="#reset">Click here to reset it</a>.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of login section -->
    
  
    ?>
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
