<link rel="stylesheet" type="text/css" href="style.css">
<?php
    try{
        //$q=new PDO('mysql:dbname=baze41;host=localhost;port=3306','root','');
        $q = new PDO('mysql:dbname=abd41-4;host=80.87.194.140;port=3306', 'abd41', 'abd41abd41');
    } catch(PDOException $e){
        die($e->getMessage());
    }
    $r=$q->prepare('SELECT * FROM `answers`');
    $r->execute(array('id'=> '1'));
    $array = $r->fetchAll(PDO::FETCH_ASSOC);
?>
<table border='1'>
    <tr>
        <td>№</td>
        <td>Ответы</td>
        <td>Ключевые слова</td>
    </tr>
    <?php foreach($array as $t): ?>
    <tr>
        <td><?=$t['id']?></td>
        <td><?=$t['answer']?></td>
        <td><?=$t['keywords']?></td>
        <td><a class="btn" href="upd_form.php ?id=<?=$t['id']?>">Редактировать</a></td>
        <td><a class="btn" href="delete.php ?id=<?=$t['id']?>">Удалить</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<form method="post" action="create_form.php">
    <br>
    <input class="btn" type="submit" value="Добавить">
</form>