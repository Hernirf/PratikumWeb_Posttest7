<?php

session_start();
require './CRUD DB/konek.php';

if(!isset($_SESSION['login'])){
    echo "<script>
        alert('Silahkan login terlebih dahulu');
        document.location.href='index.php';
            </script> ";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posstest 2</title>
    <link rel="stylesheet" type="text/css" href="posttest3.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa-brands fa-line"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-sun" id="mode"></i></a></li>
                <li ><h1 id="nama">ASMABA<span>MART</span></h1></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <nav >
                <ul>
                    <li class="aktif"><a href="home.php">HOME</a></li>
                    <li><a href="produk.php">PRODUK</a></li>
                    <li><a href="about.php">ABOUT ME</a></li>
                    <li><a href="./Crud DB/index.php">PESANAN</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="banner">
            <h2>Belanja Sekarang</h2>
        </div>
    </section>
<footer>
    <div class="container">
        <small>Copyright 2022 by Herni Suhartati</small>
    </div>
</footer>
<script src="posttest3.js"></script>
</body>
</html>