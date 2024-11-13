<?php
$dsn = 'mysql:host=localhost;dbname=admin';
$user = 'root';
$pass = '';
$option = array (
    PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
try {
    $con = new PDO ($dsn,$user,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo 'Connected';
} catch (PDOException $e) {
    echo 'FIled'.$e->getMessage();
}

?>

<?php

// التحقق مما إذا كانت قيمة اللغة تم تمريرها عبر الاستعلام النصي
if(isset($_GET['lang'])) {
    // استخراج قيمة اللغة من الاستعلام النصي
    $selected_lang = $_GET['lang'];

    // تعيين قيمة المتغير $B بناءً على اللغة المحددة
    if($selected_lang === 'EN') {
        ?>
        
        <script type="text/javascript">
          function googleTranslateElementInit() {
              new google.translate.TranslateElement({
                  pageLanguage: 'ar',
                  includedLanguages: 'en',  // تحديد اللغات المتاحة للترجمة
                  layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                  autoDisplay: false
              }, 'google_translate_element');
          }

          function triggerTranslate() {
              var translateElement = document.createElement('div');
    translateElement.id = 'google_translate_element';
    translateElement.style.position = 'absolute'; //
    translateElement.style.top = '-10000px'; // تحديد قيمة كبيرة بحيث يكون خارج الشاشة بشكل كافٍ
    translateElement.style.left = '-10000px';// تحريك العنصر إلى الخارج من العرض
    translateElement.style.width = '0'; // تحديد العرض للعنصر إلى صفر
    translateElement.style.height = '0'; // تحديد الارتفاع للعنصر إلى صفر
    translateElement.style.overflow = 'hidden'; // إخفاء أي محتوى يمكن أن يكون مرئيا في العرض أو الارتفاع الصغيرين
              translateElement.id = 'google_translate_element';
              translateElement.style.display = 'block'; // اخفاء عنصر الترجمة
    translateElement.style.visibility = 'hidden'; // جعل العنصر غير مرئي
              document.body.appendChild(translateElement);
              new google.translate.TranslateElement({
                  pageLanguage: 'ar',
                  includedLanguages: 'en',  // تحديد اللغات المتاحة للترجمة
                  layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                  autoDisplay: false
              }, 'google_translate_element');

              var interval = setInterval(function() {
                  var frame = document.querySelector('iframe.goog-te-banner-frame');
                  if (frame) {
                      var frameDoc = frame.contentDocument || frame.contentWindow.document;
                      var translateButton = frameDoc.querySelector('.goog-te-button button');
                      if (translateButton) {
                          translateButton.click();
                          clearInterval(interval);
                      }
                  }
              }, 1000); // المحاولة كل ثانية حتى تنجح
          }

          window.onload = function() {
              googleTranslateElementInit();
              setTimeout(triggerTranslate, 1000); // الانتظار لثانية واحدة قبل محاولة التفعيل
          };
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <?php
    } }

?>

<!-- إضافة عنصر الترجمة -->
<div id="google_translate_element" ></div>


<?php
// $B = ""; // يمكنك تعيين قيمة افتراضية حسب احتياجاتك

// // التحقق مما إذا كانت قيمة اللغة تم تمريرها عبر الاستعلام النصي
// if(isset($_GET['lang'])) {
//     // استخراج قيمة اللغة من الاستعلام النصي
//     $selected_lang = $_GET['lang'];

//     // تعيين قيمة المتغير $B بناءً على اللغة المحددة
//     if($selected_lang === 'AR') {
//         $B = '' . 'ar';

//     } else {
//         $B = '' . 'en';
//         ;
//     }
// }

// // عرض قيمة المتغير $B
// echo "قيمة \$B: " . $B;
?>
