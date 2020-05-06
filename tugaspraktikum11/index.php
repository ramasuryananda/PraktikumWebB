<?php
    require_once('connection.php');
    require_once('function.php');
    $konek = new Koneksi();
    $data = new Data($konek);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Universitas Udayana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:#d7d3d3">
	<center>
	<div class="body_gal">
		<div class="header">
			<img src="image/logoUnud.png" width="205px">
			<h2 id="title">Perpustakaan Universitas Udayana</h2>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Tentang</a></li>
				<li><a href="galeri.php">Galeri Buku</a></li>
				<li><a href="#">Kontak</a></li>
			</ul>
		</div>
		<div class="c_galeri">	
			<div class="g_right">
				<div class="search">
					<center>
					<form action="" method="POST">
						<select name="pilihan" class="select">
							<option value="">Pilih Filter</option>
							<option value="no_isbn">No ISBN</option>
							<option value="tahun_terbit">Tahun Terbit</option>
							<option value="judul">Judul</option>
							<option value="penerbit">Penerbit</option>
							<option value="stok">Stok</option>
	                    </select>
						<input type="text" placeholder="Search.." name="cari">
						<button type="submit" name="submit" value="cari" id="cari">Cari</button>
						<br><br>
						<table width="650px" cellpadding="0">
							<tr>
				                <th>No.</th>
				                <th>NO ISBN<br>
				                	<button type="submit" value="ASC" name="no_isbn">ASC</button>
				                	<button type="submit" value="DESC" name="no_isbn">DESC</button>
				                	<!-- <input type="submit" class="button" value="ASC" name="no_isbn">
				                	<input type="submit" class="button" value="DESC" name="no_isbn"> -->
				                </th>
				                <th>Tahun Terbit<br>
				                	<button type="submit" value="ASC" name="tahun_terbit">ASC</button>
				                	<button type="submit" value="DESC" name="tahun_terbit">DESC</button>
				                <th>Judul Buku <br>
				                	<button type="submit" value="ASC" name="judul">ASC</button>
				                	<button type="submit" value="DESC" name="judul">DESC</button>
				                	<!-- <input type="submit" class="button" value="ASC" name="nama">
				                	<input type="submit" class="button" value="DESC" name="nama"> -->
				                </th>
				                <th>Penerbit Buku <br>
				                	<button type="submit" value="ASC" name="penerbit">ASC</button>
				                	<button type="submit" value="DESC" name="penerbit">DESC</button>

				                	<!-- <input type="submit" class="button" value="ASC" name="penerbit">
				                	<input type="submit" class="button" value="DESC" name="penerbit"> -->
				                </th>
				                <th>Stok<br>
				                	<button type="submit" value="ASC" name="stok">ASC</button>
				                	<button type="submit" value="DESC" name="stok">DESC</button>
				                	<!-- <input type="submit" class="button" value="ASC" name="stok">
				                	<input type="submit" class="button" value="DESC" name="stok"> -->
				                </th>
				            </tr>

				             <?php
					          $no = 1;
					          $sort = "";
					          if(empty($sort))
					          {
					               $tampil = $data->show();
					          }
					          if (isset($_POST["no_isbn"]))
					          {
					              $sort =  $_POST["no_isbn"]; 
					              $tampil = $data->tampil_urutan($sort,"no_isbn");  
					          }
					          if (isset($_POST["tahun_terbit"]))
					          {
					              $sort =  $_POST["tahun_terbit"]; 
					              $tampil = $data->tampil_urutan($sort,"tahun_terbit");  
					          }
					          if (isset($_POST["judul"]))
					          {
					              $sort =  $_POST["judul"]; 
					              $tampil = $data->tampil_urutan($sort,"nama");  
					          }
					          if (isset($_POST["penerbit"]))
					          {
					              $sort =  $_POST["penerbit"]; 
					              $tampil = $data->tampil_urutan($sort,"penerbit"); 
					          }
					          if (isset($_POST["stok"]))
					          {
					              $sort =  $_POST["stok"]; 
					              $tampil = $data->tampil_urutan($sort,"stok");    
					          }
					          if(isset($_POST['submit']))
					          {
					              $cari = $_POST['cari'];
					              $column =  $_POST['pilihan'];
					              if($cari!="" AND $column!="")
					              {
					                  $tampil = $data->tampil_saring($cari,$column);
					              }  
					          }
					          while($data = $tampil->fetch_object())
					          {
					            ?>
					            <tr>
					              <th><?php echo $no++ ?></th>
					              <td><?php echo $data->no_isbn; ?></td>
					              <td><?php echo $data->tahun_terbit; ?></td>
					              <td><?php echo $data->judul; ?></td>
					              <td><?php echo $data->penerbit; ?></td>
					              <td><?php echo $data->stok; ?></td>
					            </tr>
					          <?php
					          }
					        ?>
						</table>
					</form>
					</center>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>&copy; Copyright 2020. All Rights Reserved</p>
			<p>Program Studi Informatika, Universitas Udayana</p>
		</div>
	</div>
	</center>
</body>
</html>