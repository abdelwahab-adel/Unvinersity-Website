<div class="container-fluid bg-dark text-light footer mt-5">
    <div class="container">
        <footer>
            <div class="row py-5">
                <div class="col-6 col-md-2 mb-3">
                    <h5 class="text-success mb-5">روابط هامة</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="massage.php" class="nav-link p-0 text-light">رسالة الجامعة</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="massage.php" class="nav-link p-0 text-light">رؤية الجامعة</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="news.php" class="nav-link p-0 text-light">اخبار الجامعة</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="history.php" class="nav-link p-0 text-light">تاريخ الجامعة</a>
                        </li>

                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="text-success mb-5">الكليات الموجودة فى الجامعة</h5>
                    <ul class="nav flex-column">
                    <?php

$sel= $con->prepare("SELECT * FROM `college`");
$sel->execute(array());
$colleges=$sel->fetchAll();

foreach ($colleges as $college) {
  

?>
                        <li class="nav-item mb-2">
                            <a href="collegee/index.php?college_id=<?= $college['college_id']; ?>" class="nav-link p-0 text-light"><?= $college['name'];?></a>
                        </li>
                        <?php

}

?>
                    </ul>
                </div>

               
                <div class="col-md-5 offset-md-1 mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.8524845093298!2d32.63606762544756!3d25.67618431213517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14491592597f70b1%3A0xccac387a294f12e5!2z2KzYp9mF2LnYqSDYp9mE2KPZgti12LE!5e0!3m2!1sar!2seg!4v1713143355950!5m2!1sar!2seg"
                        width="100%" height="250px" style="border: 0; border-radius: 10px" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-center">
<img src="assets/images/logoo.png" alt="">
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between border-top align-items-center pt-3">
                <p>&copy; 2023 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex justify-content-around fs-4 align-items-center col-md-4 col-12">
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
        </footer>
    </div>
</div>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script> -->
<!-- <script src="assets/js/bootstrap.bundle.js"></script> -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/js/bootstrap.bundle.min.js.map"></script> -->
<!-- <script src="assets/js/bootstrap.js"></script> -->
<!-- <script src="assets/js/bootstrap.min.js"></script> -->

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/all.min.js"></script>
<!-- <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/06439df8-cf5f-4804-9f6a-19874cd844a0/webchat/config.js" defer></script> -->

<noscript>Please ensure Javascript is enabled for purposes of
    <a href="https://userway.org">website accessibility</a></noscript>
<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/Home.js"></script>

</body>

</html>