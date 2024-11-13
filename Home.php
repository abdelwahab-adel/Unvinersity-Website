<?php

include 'conn.php';
$pos= $do= isset($_GET['pos']) ? $_GET['pos'] : 'no';
include 'nav.php';

?>

<!-- <div  class="rectangle-container">
    <div class="rectangle">
        <i class="icon fas fa-wrench"></i>
        <span class="text">الخدمات</span>
    </div>
    <div class="rectangle">
        <i class="icon fas fa-life-ring"></i>
        <span class="text">الدعم</span>
    </div>

    <div class="rectangle">
        <a href="#complaints">
            <i class="icon fas fa-exclamation-triangle"></i>
            <span class="text">الشكاوي</span>
        </a>
    </div>

    <div class="rectangle">
        <i class="icon fas fa-share-alt"></i>
        <span class="text">تواصل معنا</span>
    </div>
</div> -->

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
    <div class="carousel-indicators z-2">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="ealanOne"></div>
            <img src="assets/images/cusouel one.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="assets/images/cusouel two.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
            <img src="assets/images/cusouel three.jpg" class="d-block w-100" alt="..." />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php


$sel= $con->prepare("SELECT * FROM `words` ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$words=$sel->fetch();
?>
<section id="bossWord">
    <div
        class="container text-center allbosssec my-5 w-75 rounded-3 p-0 animate__animated animate__fadeInUpBig d-none z-3">
        <div class="container-fluid row options m-auto bg-light p-0">
            <div class="col-lg col-md-12 col-sm-12 py-lg-4 py-4">
                <a href="massage.php">
                    <img src="assets/images/icons8-education-64.png" alt="" />
                    <h5>رسالة الجامعة</h5>
                </a>
            </div>
            <div class="col-lg col-md-12 col-sm-12 py-lg-4 py-4">
                <a href="goals.php">
                    <img src="assets/images/mo2tamarat.png" alt="" />
                    <h5>اهداف الجامعة</h5>
                </a>
            </div>
            <div class="col-lg col-md-12 col-sm-12 py-lg-4 py-4">
                <a href="history.php"> <img src="assets/images/keta3at.png" alt="" />
                    <h5>تاريخ الجامعة</h5>
                </a>
            </div>
        </div>
        <div class="row m-auto p-0">
            <div class="col-lg-6 col-md-12 col-sm-12 p-0">
                <img class="rounded-3" src="assets/images/boss.jpg" alt="" />
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 py-lg-2 py-4 bossword">
                <h2 class="text-light">كلمة رئيس الجامعة</h2>
                <h5 class="text-success">مرحبا بكم فى جامعة الاقصر</h5>
                <p class="text-light"><?= mb_substr($words['unv_words'], 0, 996, 'UTF-8'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<main class="overflow-hidden">
    <section id="News" class="section-padding overflow-hidden">
        <div class="container-fluid row news p-0 m-auto">
            <div
                class="badge newsTitle w-100 m-auto title-padding col-md-6 col-12 row animate__animated animate__rollIn d-none">
                <h1 class="section-title fs-sm-5 fs-2 w-25 m-auto col-md-3 col fst-italic">
                    أخر الاخبار
                </h1>
            </div>
            <div class="l-news col-lg-7 col-12 p-0 animate__animated animate__fadeInBottomLeft d-none">
                <?php

$sel= $con->prepare("SELECT * FROM `post` ORDER BY post_id DESC LIMIT 1;");
$sel->execute(array());
$postt=$sel->fetch(); 
$imagess = json_decode($postt["main_image"]);
$first_image = $imagess[0];

?>
                <div class="newimg">
                    <img src="NiceAdmin/post/<?=$first_image;?>" alt="" class="h-100 w-100" />
                </div>

                <div class="allnews row px-3">

                    <?php

$sel= $con->prepare("SELECT * FROM `post` ORDER BY post_id DESC LIMIT 4");
$sel->execute(array());
$posts=$sel->fetchAll(); 
            
$n = count($posts); 

foreach ($posts as $index => $post) {
    $images = json_decode($post["main_image"]);
    $first_image = $images[0];

?>
                    <?php
    if ($index === 0) {
        continue; 
    }
?>
                    <div class="col py-2 first-new">
                        <a href="new.php?pos=<?= $post['post_id'];?>">
                            <img style="height: 90px; width:130px;" src="NiceAdmin/post/<?=$first_image;?>" alt="" />
                            <div class="badge text-success">
                                <h6 class="text-success"></h6>
                                <p>
                                    <?= mb_substr($post['post_title'],0,26 , 'UTF-8'); ?>
                                </p>
                            </div>
                        </a>
                    </div>


                    <?php } ?>
                </div>

            </div>
            <div class="r-news col-lg-5 col-12 p-0 animate__animated animate__fadeInBottomRight d-none">
                <div class="newdetails">
                    <?php

$sel= $con->prepare("SELECT * FROM `post` ORDER BY post_id DESC LIMIT 1;");
$sel->execute(array());
$post=$sel->fetch(); 
            

?>
                    <h2 class="text-success py-lg-2 py-5" style="margin: -15%  0 0 5%; font-size: 159%;">
                        <?=$post['post_title'];?></h2>
                    <!-- <h5 class="text-success">Welcome to Luxor University</h5> -->
                    <p class="text-light w-75 py-lg-2 pb-5">
                        <?= mb_substr($post['post_contant'],0,570 , 'UTF-8'); ?>
                    </p>
                </div>
                <div class="newcontact">
                    <div class="badge fs-5"><a href="news.php">أرشيف الأخبار</a></div>
                    <ul class="d-flex justify-content-around w-50 align-items-center">
                        <a href="">
                            <li><i class="fa-brands fa-facebook"></i></li>
                        </a>
                        <a href="">
                            <li><i class="fa-brands fa-whatsapp"></i></li>
                        </a><a href="">
                            <li><i class="fa-brands fa-linkedin"></i></li>
                        </a><a href="">
                            <li><i class="fa-brands fa-twitter"></i></li>
                        </a><a href="">
                            <li><i class="fa-solid fa-envelope"></i></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section style="direction: ltr;" id="events"
        class="events section-padding animate__animated animate__zoomIn d-none overflow-hidden">
        <div class="container-fluid row events p-0 m-auto overflow-hidden">
            <div class="badge w-100 m-auto col-md-6 col-12 row p-0">
                <h1 class="fs-4 w-100 m-auto col-md-3 col fst-italic bg-success px-0 py-3">
                    المؤتمرات و الاحداث
                </h1>
            </div>
            <div class="col-12 events-icons py-5 px-0 m-auto">
                <div class="owl-carousel owl-theme p-0 row ">
                    <?php

$sel= $con->prepare("SELECT * FROM `eventt`");
$sel->execute(array());
$events=$sel->fetchAll();

foreach ($events as $event) {
  

?>
                    <a href="<?= $event['event_link'];?>">
                        <div class="item mx-5">
                            <img src="NiceAdmin/event/<?= $event['event_logo'];?>" style="height: 280px;" alt="" />
                        </div>
                    </a>
                    <?php

}

?>
                </div>
            </div>
        </div>
    </section>
    <section id="about"
        class="section-padding animate__animated animate__slideInLeft d-none overflow-hidden text-center">
        <div class="w-100 m-auto row p-0 about ">
            <h1 class="fs-4 w-100 m-auto col-12 fst-italic px-0 py-5 text-center text-light">
                نبذة عن جامعة الأقصر
            </h1>
            <p class="col-12 w-100 text-light fs-4 lh-lg ">
                <span class="text-success">
                    جامعة الأقصر هي مؤسسة تطوعية غير عامة، وهي
                    المعترف بها على المستوى الدولي.</span>
                <br />
                <?= mb_substr($words['unv_history'],0,570 , 'UTF-8'); ?>.
            </p>
        </div>
    </section>
    <section dir="ltr" id="colleges" class="colleges">
        <div class="badge w-100 m-auto title-padding col-md-6 col-12 row">
            <h1
                class="college-title fs-sm-5 fs-2 w-50 m-auto col-md-3 col fst-italic p-3 text-light rounded-5 rounded-bottom-0">
                كليات الاقصر
            </h1>
        </div>
        <div class="owl-carousel owl-theme owl-carousel-colleges">
            <?php

$sel= $con->prepare("SELECT * FROM `college`");
$sel->execute(array());
$colleges=$sel->fetchAll();

foreach ($colleges as $college) {
  

?>
            <div class="item mx-md-5 mx-0">
                <a href="collegee/index.php?college_id=<?= $college['college_id']; ?>">
                    <img style="height: 50%;" src="college/logo/<?= $college['logo']; ?>" alt="" />
                </a>
                <div class="text-center">
                    <h3><?= $college['name'];?></h>
                </div></a>
            </div>
            <?php

}

?>
        </div>
    </section>
    <section dir="ltr" id="numbers" class="section-padding numbers">
        <div class="container">
            <div class="badge w-100 m-auto title-padding col-md-6 col-12">
                <h1 class="fs-sm-5 fs-2 m-auto fst-italic">
                    ألارقام فى جامعة <span class="text-success">الاقصر</span>
                </h1>
            </div>
            <div class="container">
                <?php


$sel= $con->prepare("SELECT * FROM `number` ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$number=$sel->fetch();

?>
                <div class="row text-center">
                    <div class="col-md col-12 p-0">
                        <div class="badge py-4">
                            <h3>طالب</h3>
                        </div>
                        <div class="number-div student-number">
                            <div class="student-overlay"></div>
                            <div class="number w-50 rounded-circle p-4">
                                <img src="assets/images/icons8-graduation-hat-64.png" alt="" />
                                <span class="fw-bold num" data-target="<?= $number['students_number'];?>">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-12 p-0">
                        <div class="badge py-4">
                            <h3>عضو هيئة تدريس</h3>
                        </div>
                        <div class="number-div stuff-number">
                            <div class="number w-50 border-light rounded-circle p-4">
                                <img src="assets/images/icons8-management-96.png" alt="" />
                                <span class="fw-bold num" data-target="<?= $number['staff_number'];?>">0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-12 p-0">
                        <div class="badge py-4">
                            <h3>كلية</h3>
                        </div>
                        <div class="number-div college-number">
                            <div class="college-overlay"></div>
                            <div class="number w-50 rounded-circle p-4">
                                <img src="assets/images/college_icon-removebg-preview.png" alt="" />
                                <span class="fw-bold num" data-target="<?= $number['colleges_number'];?>">">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

$do= isset($_GET['do']) ? $_GET['do'] : 'complan';
if(isset($_POST['submit'])) {
       
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $phone=$_POST['subject']; 

        $stmt= $con->prepare("INSERT INTO `complints`(`name`, `email`, `message`, `phone`) 
        VALUES ('$name','$email','$message','$phone');"); 
        $stmt->execute(array());
        // header("Location:../home.php");
        
        echo
        "<script>
        alert('Successfully Send Complint');
        document.location.href = 'Home.php'; </script>";
  } 
  
 ?>
    <section id="complaints" class="section-padding animate__animated animate__backInRight d-none">
        <div class="badge w-100 m-auto col-md-6 col-12 row p-0 overflow-hidden">
            <h1
                class="bg-success fs-sm-5 fs-2 w-50 m-auto col-md-3 col fst-italic p-3 text-light rounded-5 rounded-bottom-0">
                الشكاوى والاقتراحات
            </h1>
        </div>
        <form action="" method="post" enctype="multipart/form-data" id="contactForm">

            <div class="container complaints row m-auto overflow-hidden">
                <div class="col-md col-12 row">
                    <form class="py-5 ms-3" id="contactForm">
                        <div class="row mb-3 col-12 py-3">
                            <label for="inputEmail3"
                                class="col-sm-4 col-form-label text-dark fw-bold mb-md-0 mb-3">ألاسم كامل</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="ألاسم رباعي" aria-label="Full name"
                                    name="name" required data-error="Please enter your name" />
                            </div>
                        </div>

                    </form>
                    <div class="row mb-3 col-12 py-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label text-dark fw-bold mb-md-0 mb-3">البريد
                            الالكتروني</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني" aria-label="Email"
                                name="email" required data-error="Please enter your Email" />
                        </div>
                    </div>
                    <div class="row mb-3 col-12 py-3">
                        <label class="col-sm-4 col-form-label text-dark fw-bold mb-md-0 mb-3">رقم الهاتف</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="phone" maxlength="11" placeholder="رقم الهاتف"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="subject"
                                data-error="Please enter your phone" />
                        </div>
                    </div>
                    <div class="col-12 text-center py-4">

                        <input style="letter-spacing: 1px;" type="submit" name="submit" value="إرسال"
                            class="btn btn-success w-75">
                        <!-- <button class="btn btn-success w-75">Contact Us</button> -->
                    </div>
                </div>
                <div class="col-md col-12 row text-center">
                    <div class="col-12 p-5">
                        <div class="msg bg-success w-75 p-2 m-auto fs-4 rounded-2 mb-3">
                            رسالتك (شكوتك)
                        </div>
                        <div class="mt-5">
                            <textarea class="form-control msg-box" id="exampleFormControlTextarea1" rows="8"
                                name="message" rows="4" data-error="Write your message" required></textarea>
                        </div>
                    </div>
                    <div class="col-12"></div>
                </div>

            </div>
        </form>
    </section>
</main>

<?php
include 'footer.php';
?>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/c118c52c-16f1-433f-8784-b375e99a3976/webchat/config.js"  defer></script>