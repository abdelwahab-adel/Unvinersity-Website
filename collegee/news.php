<?php

include 'nav.php';  

$limit= isset($_GET['limit']) ? $_GET['limit'] : 0;
$like= isset($_GET['like']) ? $_GET['like'] : '';

$sel = $con->prepare("SELECT * FROM `post` WHERE admin_id = ? ORDER BY post_id DESC ;");
$sel->execute(array($college_id));
$posts=$sel->fetchAll();

?> 
 
 
<!-- Posts Section -->
<div class="container mt-5" id="posts">
    <div class="row mb-4">
       <form class="form-inline my-2 my-lg-0" action="post_sear.php" method="post" >
          <div class="col-lg-8">
            <input type="search" style=" margin-left:70%; margin-top:20%;" name="search" class="form-control" placeholder="Search about posts...">
          </div>
          <div class="col-lg-4">
            <input style=" margin-left:170%; width:110% ; margin-top:45%;" type="date" name="date" class="form-control">
          </div>
          <input type="submit" name="send"  style="width: auto; margin-top:7%; background-color:  <?= $college_inf['m_color']; ?>;  margin-left:95%;" class="btn " value="Search">
        </form>
     </div> 
<!-- end of row -->

    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>News</h2>
        </div> <!-- end of col -->
    </div> <!-- end of row -->
    <!-- Row 1 -->
      
    <div class="row">
       <?php foreach($posts as $post){?>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <p class="card-text font-weight-bold" style="background-color:  <?= $college_inf['m_color']; ?>; border-radius: 10px; color: white;"><a href="one post.php?pos=<?= $post['post_id'];?>"><?= $post['post_date'];?></a></p>
                    <div class="gray-rectangle" style="background-color: #e0e0e0; height: 200px; border-radius: 10px;">
                       <a href="one post.php?pos=<?= $post['post_id'];?>">
                           <img src="post/<?=$post["main_image"];?>" style="width: 100%; height:200px;" class="img-fluid" alt="">
                       </a> 
                    </div>
                        <h3 ><a href="one post.php?pos=<?= $post['post_id'];?>" ><?= $post['post_title'];?></h3>
                </div>
            </div>
        </div> <!-- end of col -->
       <?php } ?>
    </div>
</div>







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