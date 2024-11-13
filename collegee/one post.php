<?php include 'nav.php';  
?>

    <?php


if(isset($_GET['pos'])){
    $id = $_GET['pos'];
  

$sel= $con->prepare("SELECT * FROM `post` WHERE post_id = '$id' ; ");
$sel->execute(array());
$post=$sel->fetch();




$count=-1;
?>
<!-- Single Post Page -->
<div class="container mt-5"  id="single-post">
    <div class="row mb-4">
        <div class="col-lg-10 text-left">
          <h2 style="display: flex; justify-content: center;align-items: center;margin-left:25%; font-size:29px; margin-top: 10%;"><?= $post['post_title'];?></h2>
        </div> <!-- end of col -->
        <div class="col-lg-1.5 text-right">
            <p class="font-weight-bold" style="background-color:<?= $college_inf['m_color']; ?>; border-radius: 10px; display: inline-block; padding: 5px 10px; margin-top: 50%; color: white;">Date: <?= $post['post_date'];?></p>
        </div> <!-- end of col -->
    </div> <!-- end of row -->

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="gray-rectangle" style="background-color: #e0e0e0; height: 300px; border-radius: 10px; text-align: center;">
               <div class="carousel-item active">
                  <img src="post/<?=$post["main_image"];?>" style="height: 500px; width: 400px;" class="d-block w-100" >
              `</div> 
            </div>
        </div> <!-- end of col -->

        <div class="col-lg-8 col-md-6 mb-4">
            <div class="content">
              <h2 style="display: flex; margin:200px; font-size:19px; margin-top: 38px; padding: 5px; text-align: right;"><?= $post['post_contant'];?></h2>
            </div>
        </div> <!-- end of col -->
    </div>
    <div class="col-md-6" style="justify-content: right; display: flex">
                        <form  action="news.php">
                           <input type="submit" name="submit" style="width:100%; margin-top:7%; margin-left:70%; align-items: center; background-color: <?= $college_inf['m_color']; ?>;" class="btn " value="Return News"> 
                        </form>
     </div> <!-- end of row -->
</div> <!-- end of container -->
<!-- end of single post page -->
 

<?php } ?>
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
</body>
</html>