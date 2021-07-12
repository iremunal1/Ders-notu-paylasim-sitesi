<?php

include('database.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $nots = $_POST['nots'];
  $dersler = $_POST['dersler'];
  $konular = $_POST['konular'];
  $bilgis = $_POST['bilgi'];

  $sorgu = $db->prepare("INSERT INTO notlistesi(nots ,ders, konu, bilgi) VALUES(?, ?, ?, ?)");
       $sorgu->bindParam(1, $nots, PDO::PARAM_STR);
       $sorgu->bindParam(2, $dersler, PDO::PARAM_STR);
       $sorgu->bindParam(3, $konular, PDO::PARAM_STR);
       $sorgu->bindParam(4, $bilgis, PDO::PARAM_STR);
       $sorgu->execute();
      header("location:../index.php?durum=ok");
}

 ?>
