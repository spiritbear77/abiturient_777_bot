<?php
session_start();
function dd($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
try {
    //$q = new PDO('mysql:dbname=baze41;host=localhost;port=3306', 'root', '');
    $q = new PDO('mysql:dbname=abd41-4;host=80.87.194.140;port=3306', 'abd41', 'abd41abd41');
} catch (PDOException $e) {
    die($e->getMessage());
}
$r = $q->prepare('SELECT * FROM `users` WHERE `login`=:login AND `password`=MD5(:password)');
$r->execute($_POST);
$array = $r->fetch(PDO::FETCH_ASSOC);
//dd($array);
if (count($array) > 1) {
    $_SESSION['user'] = $array;
    header('location: main.php');
} else {
    header('location: index.php');
}
?>

































..php');
}