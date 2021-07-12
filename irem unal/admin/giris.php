<?php
include('database.php');
$sorgu = $db->query("SELECT k_adi, sifre FROM kayit");
  $dondur = $sorgu->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

 $sifre = $_POST['sifre'];
 $nickname = $_POST['kadi'];

  if (isset($nickname) || isset($sifre)) {
    $giris = $db->query("SELECT * FROM kayit WHERE id = '$id' AND k_adi = '$nickname' AND sifre = '$sifre'")->fetch();
      header("Location:admin.php");
}else {
     header("Location:../giris.php?durum=no");
   }
  }


 ?>
