<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../user/galeri.php');
      }
    }
    else{
      header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Galeri</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="batas">
        <div id="atas">
            <img src="../img/banner.jpg" alt="">
            <p>Toko Buku Udayana</p>
            <p>Welcome Admin</p>
        </div>
        <div id="sidebar">
            <img src="../img/logo.png" alt="">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="galeri.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            
        </div>
        <div id="menu">
            <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="galeri.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
        </div>
        <div id="isi">
            <h1>Galeri</h1>
            <form class="example" action="#">
                <input type="text" placeholder="Cari Buku..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Teenlit:Jingga dan Senja[Cover Baru]</p>
                    <p>58.000</p>
                    <nav>
                        <ul>
                            <li>Penulis</li>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                        </ul>
                        <ul>
                            <li>Estri Kinasih</li>
                            <li>312.0</li>
                            <li>2015</li>
                            <li>9786020331522</li>
                            <li>Indonesia</li>
                            <li>Gramedia Pustaka Utama</li>
                            <li>0.3 kg</li>
                        </ul>
                        <button class="button">Beli</button>
                    </nav>
                </div>
                <img src="../img/buku1.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Love Theft</p>
                    <p>75.650</p>
                    <nav>
                        <ul>
                            <li>Penulis</li>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                        </ul>
                        <ul>
                            <li>Prisca Primasari</li>
                            <li>408.0</li>
                            <li>2017</li>
                            <li>9786026682079</li>
                            <li>Indonesia</li>
                            <li>Inari</li>
                            <li>0.4 kg</li>
                        </ul>
                        <button class="button">Beli</button>
                    </nav>
                    
                </div>
                <img src="../img/buku2.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Kambing Jantan</p>
                    <p>25.000</p>
                    <nav>
                        <ul>
                            <li>Penulis</li>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                        </ul>
                        <ul>
                            <li>Raditya Dika</li>
                            <li>237.0</li>
                            <li>2005</li>
                            <li>9789793600697</li>
                            <li>Indonesia</li>
                            <li>GagasMedia</li>
                            <li>0.2 kg</li>
                        </ul>
                        <button class="button">Beli</button>
                    </nav>
                   
                </div>
                <img src="../img/buku3.jpg" alt="">
            </div>
            <div><center><button class="button">Tampilkan Lebih Banyak</button></center></div>
            <br>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Rama Suryananda</p>
        </div>
        
    </div>
</body>
</html>