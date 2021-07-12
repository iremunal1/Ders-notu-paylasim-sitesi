<?php include('database.php');


$id = $_GET["sil"];
$sorgu = $db->prepare("DELETE FROM notlistesi WHERE id=?");
$satir = $sorgu->execute(array($id));
header("location:admin.php");

 ?>
