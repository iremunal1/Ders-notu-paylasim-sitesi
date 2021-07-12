<?php

include('database.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $ad = $_POST['ad'];
  $soyad = $_POST['soyad'];
  $sifre = $_POST['sifre'];
  $kadi = $_POST['kadi'];
  $posta = $_POST['posta'];

  $sorgu = $db->prepare("INSERT INTO kayit(ad ,soyad, k_adi, sifre , posta) VALUES(?, ?, ?, ?, ?)");
       $sorgu->bindParam(1, $ad, PDO::PARAM_STR);
       $sorgu->bindParam(2, $soyad, PDO::PARAM_STR);
       $sorgu->bindParam(3, $kadi, PDO::PARAM_STR);
       $sorgu->bindParam(4, $sifre, PDO::PARAM_INT);
        $sorgu->bindParam(5, $posta, PDO::PARAM_STR);
       $sorgu->execute();
      header("location:../giris.php?durum=ok");
}

 ?>
