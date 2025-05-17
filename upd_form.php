<link rel="stylesheet" type="text/css" href="style.css">
<?php
try{
        //$q=new PDO('mysql:dbname=baze41;host=localhost;port=3306','root','');
        $q = new PDO('mysql:dbname=abd41-4;host=80.87.194.140;port=3306', 'abd41', 'abd41abd41');
    } catch(PDOException $e){
        die($e->getMessage());
    }
    $r=$q->prepare('SELECT * FROM `answers` WHERE `id`=:id');
    $r->execute(['id'=>$_GET['id']]);
    $array = $r->fetch(PDO::FETCH_ASSOC);
?>
<form method="post" action="upd.php">
    <span>Ответ</span><br>
    <input type="text" name="answer" value="<?= $array['answer'] ?>" required=""><br><br>
    <span>Ключевые слова</span><br>
    <input type="text" name="keywords" value="<?= $array['keywords'] ?>"><br><br>
    <input class="btn" type="submit" value="Редактировать">
    <input type="hidden" name="id" value="<?= $array['id'] ?>">
</form>