
<?php include('admin/database.php');

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Final</title>
		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	</head>
	<body>
		<div id="header">
						<div class="top mt-5">
								<nav id="nav">
									<ul>
										<li><a href="not.php"><span class="btn btn-outline-success">Notlar</span></a></li>
										<li><a href="giris.php"><span class="btn btn-outline-danger">Panel</span></a></li>
									</ul>
								</nav>

						</div>
					</div>
					<div id="main">

					<section class="two">
						<div class="container">


						</div>
					</section>
          <article>
      <div class="content-left-size">
        <div class="conten-left">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="content-head">
                  <div class="content-head-left">
                     <h4>Yeni not ekleme</h4>
                  </div>
                  <div class="content-head-right">
                    <form class="" action="admin/ekle.php" method="post">
                </div>
              </div>
              <div class="message-content">
                 <textarea name="nots"></textarea>
              </div>
              <div class="options-content">
                <div class="options-content-2">
                  <div class="content-head-left">
                     <h4>Kategori seçimi</h4>
                  </div>
                </div>
                <div class="options-1">
                    <div class="op-1">
                      <label for="" class="mt-3">Dersler : </label>
                      <label for="">Konular  :</label>
                      <label for="" class="mt-1">Bilgi ekleme :</label>
                    </div>
                    <div class="op-2">
                      <div class="dils">
                         <div class="kv-plugin-loading loading-postform-format">&nbsp;</div>
                         <select id="dersler" class="form-control" name="dersler" >
                           <option value="0" data-language="bos"></option>
                         <option value="Ag sistemleri" data-language="ag">Ağ sistemleri</option>
                         <option value="Yapay zeka" data-language="yapay">Yapay zeka</option>
                         <option value="İleri web programlama" data-language="ileri">İleri web programlama</option>
                        <option value="Web programlama" data-language="web">Web programlama</option>
                        <option value="İşletim sistemleri" data-language="is">İşletim sistemleri</option>

                         </optgroup>


                        </optgroup>
                         </select>
                       </div>
                       <div class="exp mt-2">
                         <select id="Konular" class="form-control" name="konular">
                           <option value="h0"></option>
                         <option value="hafta 1">1 hafta</option>
                         <option value="hafta 2">2 hafta</option>
                         <option value="hafta 3">3 hafta</option>
                         <option value="hafta 4">4 hafta </option>
                         <option value="hafta 5">5 hafta</option>
                         <option value="hafta 6">6 hafta</option>
                         </select>

                       </div>
                       <div class="pname mt-2">
                       <input type="text" id="pnametitle" class="form-control" name="bilgi" maxlength="100">
                       </div>
                       <div class="form-group mt-2">
                         <button type="submit" class="btn btn-success" style="color:#fff;">Not paylaşımını gönder</button>
                       </div>
                    </div>
                      </form>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </article>
				</body>
				</html>
