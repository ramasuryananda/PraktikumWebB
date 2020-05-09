<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../user/index.php');
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
    <title>Admin Index</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="batas">
        <div id="atas">
            <img src="../img/banner.jpg" alt="">
            <p>Toko Buku Udayana</p>
            <br>
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
            <h1>Selamat Datang</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book.</p>
            <h1>Galeri</h1>
            <div class = "galeri">
                <img src="../img/buku1.jpg" alt="">
                <p><a href="galeri.html">Baca Lebih Lanjut >></a></p>
            </div>
            <div class = "galeri">
                <img src="../img/buku2.jpg" alt="">
                <p><a href="galeri.html">Baca Lebih Lanjut >></a></p>
            </div>
            
            <div class = "galeri">
                <img src="../img/buku3.jpg" alt="">
                <p><a href="galeri.html">Baca Lebih Lanjut >></a></p>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Rama Suryananda</p>
        </div>
        
    </div>
</body>
</html>