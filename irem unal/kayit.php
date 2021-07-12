<?php include('admin/database.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <title>Final</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
  <body>

    <section id="contact" class="four" style="margin-top:50px;">
      <div class="container">

        <header>
          <h2 style="text-align:center;">Kayıt Ekranı</h2>
        </header>
        <div class="girisboyut" style="width:60%; margin:auto;">
          <form method="post" action="admin/kayit.php">
            <div class="row">
              <div style="width:100%;">
              <input type="text" name="ad" placeholder="Adınızı Giriniz" required><br>
              <input type="text" name="soyad" placeholder="Soyadınızı Giriniz" required><br>
              <input type="password" name="sifre" placeholder="Şifrenizi Giriniz" required><br>
              <input type="text" name="kadi" placeholder="Kullanıcı Adınızı giriniz" required><br>
              <input type="email" name="posta" placeholder="E-posta adresinizi giriniz" required>
              </div>
              <div style="width:100%; margin:auto; text-align:center;">
                <input type="submit" value="Kayıt Ol" />
              </div>
            </div>
          </form>
        </div>

      </div>
    </section>

  </body>
</html>
