<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luxor University</title>
    <link rel="icon" href="assets/images/Title_Logo.png" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css.map" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/Home.css" />
    <style>
    
      
    </style>
  </head>
  <body >
              <!-- <div class="text-dark"  id="google_translate_element"></div>  -->
    
    <a class="topp d-none" href="#">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="32"
        height="32"
        fill="rgb(15, 15, 58"
        class="bi bi-arrow-up-circle-fill"
        viewBox="0 0 16 16"
      >
        <path
          d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"
        />
      </svg>
    </a>
    <div class="container-fluid top-navbar" >
      <header class="border-bottom w-100 px-1">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-1">
            <!-- <select
              class="bg-transparent text-light border-0 p-1"
              aria-label="Default select example"
            >
              <option class="text-dark"  selected>EN</option>
              <option class="text-dark"  value="1">AR</option>
            </select>
             -->
<a href="?lang=EN">EN</a>
<a href="?lang=AR">AR</a>

          </div>
          <div style="margin-right: 50%;" class="col-1">
            <a  href="NiceAdmin">Admin</a>

          </div>
          <div
            class="col-md-3 col-4 d-flex justify-content-around align-items-center row position-relative me-1"
          >
            <span class="title col-lg-4 col-md-7 col-sm-10 py-2"
              ><a
                style="text-decoration: none; color: aliceblue"
                href="Home.php"
                >الصفحة الرئيسية</a
              ></span
            >

            <ul
              class="list col-6 d-lg-flex justify-content-around align-items-center d-md-none d-sm-none d-none"
            >
              <a href=""
                ><li><i class="fa-brands fa-facebook"></i></li
              ></a>
              <a href="">
                <li><i class="fa-brands fa-whatsapp"></i></li></a
              ><a href="">
                <li><i class="fa-brands fa-linkedin"></i></li></a
              ><a href="">
                <li><i class="fa-brands fa-twitter"></i></li></a
              ><a href=""
                ><li><i class="fa-solid fa-envelope"></i></li
              ></a>
            </ul>
          </div>
        </div>
      </header>
    </div>

    <nav class="navbar navbar-expand-xl bg-body-tertiary p-1 px-3">
      <div class="container-fluid d-flex justify-content-around">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
          onclick="StopHover();hiddenSideBar()"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-start canHover"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
              onclick="ShowHover()"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="anwan navbar-nav flex-grow-1">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  href="#"
                  >الجامعة</a
                >
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">عن الجامعة</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="boss.php"
                      >كلمة رئيس الجامعة</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >الهيكل التنظيمي للالجامعة</a
                    >
                  </li>
                  <li><a class="dropdown-item" href="#">خريطة الموقع</a></li>
                  <li>
                    <a class="dropdown-item" href="massage.php">تاريخ الجامعة</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="massage.php">رؤية الجامعة</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">مهمة الجامعة</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="goals.php">أهداف الجامعة</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >الكليات</a
                >
                <ul class="dropdown-menu">
                <?php  $sel= $con->prepare("SELECT * FROM `college`");
$sel->execute(array());
$colleges=$sel->fetchAll();

foreach ($colleges as $college) {
  

?>
                  
              
                <li>
                    <a class="dropdown-item" href="collegee/index.php?college_id=<?= $college['college_id']; ?>"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-laptop"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"
                        />
                      </svg>
                      <?= $college['name'];?></a
                    >
                  </li>
                  <?php

}

?>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >القطاعات</a
                >
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#"
                      >قطاع شؤون التعليم والطلاب</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >قطاع الدراسات العليا والبحوث</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >تنمية المجتمع والبيئة
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >قطاع أمين عام الجامعة</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >الأقسام</a
                >
                <ul
                  class="dropdown-menu dropdown-menu-end dropdown-menu-xxl-start"
                >
                  <li>
                    <a class="dropdown-item fs-7" href="#"
                      >إدارة التنظيم والإدارة</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >إدارة الاتصالات والمؤتمرات</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >إدارة الهجرة</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >إدارة التعليم العسكري</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >المراكز والمشاريع</a
                >
                <ul
                  class="dropdown-menu dropdown-menu-end dropdown-menu-xxl-start"
                >
                  <li>
                    <a class="dropdown-item" href="#"
                      >مراكز التطوير بالجامعة</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >المراكز والوحدات الخاصة</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">الأندية الجامعية</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >مراكز التدريب والتدريس</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >المراكز والوحدات البحثية</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >الخدمات الرقمية</a
                >
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-person-circle me-3"
                        viewBox="0 0 16 16"
                      >
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path
                          fill-rule="evenodd"
                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                        />
                      </svg>
                      الطلاب</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-people-fill me-3"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"
                        />
                      </svg>
                      الكلية واعضاء هيئة التدريس</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-mortarboard-fill me-3"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"
                        />
                        <path
                          d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"
                        />
                      </svg>
                      الخريجين وطلاب الدراسات العليا</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item newsDrop dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >أخبار</a
                >
                <ul
                  class="dropdown-menu dropdown-menu-end dropdown-menu-xxl-start"
                >
                  <li><a class="dropdown-item" href="Home.php#News">أحدث الأخبار</a></li>
                  <li><a class="dropdown-item" href="news.php">أرشيف الأخبار</a></li>
                  <li>
                    <a class="dropdown-item" href="#">خريطة الجامعة</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>



<!-- 
    <script src="script.js"></script>
      <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'ar'},
                'google_translate_element'
            );
        } 
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->


  