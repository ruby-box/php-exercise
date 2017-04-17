<?php
$dbh = new PDO('mysql:host=localhost;dbname=momjobgo', 'root', 'momjobgo', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
switch($_GET['mode']){
  case 'insert' :
    $stmt = $dbh->prepare("insert into topic (title, description, created) values (:title, :description, now())");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);

    $title = $_POST['title'];
    $description = $_POST['description'];
    $stmt->execute();
    header("Location: list.php");
    break;
  case 'delete' :
    $stmt = $dbh->prepare('delete from topic where id = :id');
    $stmt->bindParam(':id', $id);

    $id = $_POST['id'];
    $stmt->execute();
    header("Location: list.php");
    break;
  case 'modify' : 
    $stmt = $dbh->prepare("update topic set title = :title, description = :description where id = :id");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);

    $title = $_POST['title'];
    $description = $_POST['description'];
    $id = $_POST['id'];
    $stmt->execute();
    header("Location: list.php?id={$_POST['id']}");
    break;
}
?>