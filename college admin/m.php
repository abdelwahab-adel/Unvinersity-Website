<?php
include 'connect.php'; 

$dsn = 'mysql:host=localhost;dbname=admin';
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

?>

<?php


$sel= $conn->prepare("SELECT * FROM `words` ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$words=$sel->fetch();
?>

<p class="text-light"><?= mb_substr($words['unv_words'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_message'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_history'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_goals'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_vision'], 0, 996, 'UTF-8'); ?>
</p>

<p>_____________________________________________________________________________________________________________________________________________________________________________________</p>


<?php


$sel= $con->prepare("SELECT * FROM `words` ORDER BY id DESC LIMIT 1; ");
$sel->execute(array());
$words=$sel->fetch();
?>

<p class="text-light"><?= mb_substr($words['unv_words'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_message'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_history'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_goals'], 0, 996, 'UTF-8'); ?>
</p>
<p class="text-light"><?= mb_substr($words['unv_vision'], 0, 996, 'UTF-8'); ?>
</p>