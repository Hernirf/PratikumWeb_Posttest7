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
                <li><h1 id="nama">ASMABA<span>MART</span></h1></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li ><a href="home.php">HOME</a></li>
                    <li><a href="produk.php">PRODUK</a></li>
                    <li class="aktif"><a href="about.php">ABOUT ME</a></li>
                    <li><a href="./Crud DB/index.php">PESANAN</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="label">
        <div class="container">
            <p>HOME/ABOUT ME</p>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="frame">
                <h3>ABOUT ME</h3>
            </div>
            <img src="herni.JPG" height="300%" width="300px" >
            <div class="biodata">
                <table align="center" cellpadding="5px" width="300px">
                    <tr>
                        <td>Nama</td>
                        <td>: Herni Suhartati</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: 2109106001</td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: Informatika</td>
                    </tr>
                    <tr>
                        <td>Angkatan</td>
                        <td>: 2021</td>
                    </tr>
                </table>

            </div>
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