<?php
    try{
        //$q=new PDO('mysql:dbname=baze41;host=localhost;port=3306','root','');
        $q = new PDO('mysql:dbname=abd41-4;host=80.87.194.140;port=3306', 'abd41', 'abd41abd41');
    } catch(PDOException $e){
        die($e->getMessage());
    }
    $r=$q->prepare('UPDATE `answers` SET `answer`=:answer, `keywords`=:keywords WHERE `id`=:id');
    $r->execute(['answer'=>$_POST['answer'], 'id'=> $_POST['id'], 'keywords'=> $_POST['keywords']]);
    $array = $r->fetchAll(PDO::FETCH_ASSOC);
    header('location: main.php');
?>