
<?php include('database.php');

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Final</title>
		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	</head>
  <style media="screen">
    input {
      width: 100%;
    }
  </style>
	<body>
		<div id="header">
						<div class="top mt-5">
								<nav id="nav">
									<ul>
										<li><a href="../index.php"><span class="btn btn-outline-success">Anasayfa</span></a></li>
										<li><a href="giris.php"><span class="btn btn-outline-danger">Panel</span></a></li>
									</ul>
								</nav>

						</div>
					</div>
					<div id="main">

          <article>
      <div class="content-left-size">
        <div class="conten-left">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-dark text-nowrap text-center">
                    <thead>
                        <tr>
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Not</th>
                            <th class="border-top-0">Ders</th>
                            <th class="border-top-0">Konu</th>
                            <th class="border-top-0">Bilgi</th>
                            <th class="border-top-0">Sil</th>
                            <th class="border-top-0">Duzenle</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <?php

                             $icerik = $db->query("SELECT * FROM notlistesi ORDER BY id Desc limit 7");
                                $icerik->execute();
                                while ($row = $icerik->fetch(PDO::FETCH_ASSOC)) {
                                  $id = $row['id'];
                                  $not = $row['nots'];
                                  $konu = $row['ders'];
                                  $ders = $row['konu'];
                                  $bilgi = $row['bilgi'];

                           ?>

                              <td> <input type="text" name="" value="<?php echo $id; ?>" disabled></td>
                              <td> <input type="text" name="" value="<?php echo $not; ?>"> </td>
                              <td><input type="text" name="" value="<?php echo $ders; ?>"></td>
                              <td> <input type="text" name="" value="<?php echo $konu; ?>"> </td>
                              <td> <input type="text" name="" value=" <?php echo $bilgi; ?>"></td>

                              <td>
                              <a href="sil.php?sil=<?php echo $id; ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>

                             </td>
                             <td>
                             <a href="duzenle.php?duzenle=<?php echo $id; ?>" class="btn btn-outline-success"><i class="fas fa-tools"></i></a>
                            </td>
                          </tr>
                            <?php } ?>
                                    </tbody>
                                </table>
            </div>
          </div>
        </div>
      </div>
    </article>
				</body>
				</html>
