<?php
include 'nav.php';  



$do= isset($_GET['do']) ? $_GET['do'] : 'complan';
if(isset($_POST['submit'])) {
       
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $phone=$_POST['phone']; 

        $stmt= $con->prepare("INSERT INTO `complints`(`name`, `email`, `message`, `phone` , `admin_id`) 
        VALUES ('$name','$email','$message','$phone','$college_id');"); 
        $stmt->execute(array());
      
        echo
        "<script>
        alert('Successfully Send Complint');
        document.location.href = 'index.php'; </script>";
  } 
  

?>

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                        <h1><span class="turquoise">Faculty of </span><?= $college_inf['name'];?></h1>
                        <h1><span class="turquoise"><?= $college_id;?></h1>
                            <p class="p-large"><?= $college_inf['about']; ?></p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" style="margin-top: 10%; width: 120%; height: 80%;" src="logo/<?= $college_inf['background']; ?>" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" style="height: 80%; margin-top: 10%; width: 70%;" src="logo/<?= $college_inf['boss']; ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>ًWord of Dead of the Collage</h2>
                            <h6><p style="text-align: center;"><?= $words['unv_words'];?>.</p>
                            </h6>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Goals</h4>
                            <p style="text-align: center;"><?= mb_substr($words['unv_goals'], 0, 255, 'UTF-8'); ?>.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Vision</h4>
                            <p style="text-align: center;"><?= mb_substr($words['unv_vision'], 0, 255, 'UTF-8'); ?>.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Message</h4>
                            <p style="text-align: center;"><?= mb_substr($words['unv_message'], 0, 255, 'UTF-8'); ?>.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <?php 


$sel = $con->prepare("SELECT * FROM number WHERE admin_id = ?");
$sel->execute(array($college_id));
$number = $sel->fetch();
?>
    

<div  class="wrapper row d-flex justify-content-around text-center py-5">
    <div style="flex-direction:column;gap:40px"  class="container col d-flex justify-content-around text-center">
        <svg style="margin:auto;" xmlns="http://www.w3.org/2000/svg" x="50%" y="50%"  width="50px" viewBox="0 0 448 512" >
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z" />
        </svg><span style="font-size:30px" class="num fw-bold" data-val="<?= $number['graduates_number'];?>">">000</span>
        <span style="font-size:30px" class="text fs-2">Meals Delivered</span>
    </div>
    <div style="flex-direction:column;gap:40px"  class="container col d-flex justify-content-around text-center">
        <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="40px" viewBox="0 0 320 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152z" />
        </svg> <span style="font-size:30px" class="num fw-bold" data-val="<?= $number['staff_number'];?>">">000</span>
        <span style="font-size:30px" class="text fs-2">Happy Customers</span>
    </div>
    <div style="flex-direction:column;gap:40px"  class="container col d-flex justify-content-around text-center">
        <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="80px"  viewBox="0 0 640 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-8 384V352h16V480c0 17.7 14.3 32 32 32s32-14.3 32-32V192h56 64 16c17.7 0 32-14.3 32-32s-14.3-32-32-32H384V64H576V256H384V224H320v48c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48v80H243.1 177.1c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9V480c0 17.7 14.3 32 32 32s32-14.3 32-32z" />
        </svg> <span style="font-size:30px" class="num fw-bold" data-val="<?= $number['students_number'];?>">">000</span>
        <span style="font-size:30px" class="text fs-2">Menu Items</span>
    </div>
    5
</div>


    
 
    
    <!-- Contact -->
    <div id="contact" class="form-2">
        <!-- Suggestions and Complaints -->
    <div id="suggestions-complaints"  class="form-2">
        <div class="container" style="background-image: url('images/ex-header-background.jpg') ;">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Suggestions and Complaints</h2>
                    <p class="p-heading p-large text-center">Your feedback is valuable to us. Please let us know your suggestions and complaints.</p>
                    <form id="suggestionsComplaintsForm" action="?do=done" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="name" required>
                            <label class="label-control" for="name">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="email" required>
                            <label class="label-control" for="email">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control-input" id="phone" required>
                            <label class="label-control" for="phone">Phone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" id="message" required></textarea>
                            <label class="label-control" for="message">Your Message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Contact Us" class="form-control-submit-button">


                        </div>
                        <div class="form-message">
                            <div id="smsgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of suggestions and complaints -->

    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About College</h4>
                        <p>college is one of the best in the country and we're very proud of that so we've decided to give it a try</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
<!-- Scripts -->
<script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="js/scripts.js"></script> <!-- Custom scripts -->
<script>
let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function() {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});
</script>
</body>

</html>