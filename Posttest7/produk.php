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
                    <li><a href="home.php">HOME</a></li>
                    <li class="aktif"><a href="produk.php">PRODUK</a></li>
                    <li><a href="about.php">ABOUT ME</a></li>
                    <li><a href="./Crud DB/index.php">PESANAN</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="label">
        <div class="container">
            <p>HOME/PRODUK</p>
        </div>

    </section>
    <section class="servis">
        <div class="container">
            <div class="frame">
                <h3>PRODUK ASMABA<span>MART</span></h3>
            </div>
            <div class="box">
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/kimchi-fried-rice-with-fried-egg-picture-id1195337586?k=20&m=1195337586&s=612x612&w=0&h=7vagv5cihhfvE76Ko-uzOJO_gC5tvwq2KVOG5T0zlSU=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>NASI GORENG</h5>
                </div>
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/chinese-style-fried-noodles-picture-id1403179775?k=20&m=1403179775&s=612x612&w=0&h=ojzY6KAy-siF4g4Va-Kov64EjR7A_K7n1DrRxdw7Hq0=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>MIE DOK-DOK</h5>
                </div>
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/indomie-goreng-instant-fried-noodle-popular-from-indonesia-served-picture-id1421726583?k=20&m=1421726583&s=612x612&w=0&h=3lLWXPwhGZqIck2tJzXhDyjbrtBE3mqVhDzlrJQJFyg=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>MIE GORENG</h5>
                </div>
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/the-famous-fried-chicken-in-indonesia-and-very-popular-is-ayam-geprek-picture-id1327988421?k=20&m=1327988421&s=612x612&w=0&h=G60tzz5yaX857M5ugzumPz6Cr9UzAc00N5ynuziy2Jo=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>AYAM GEPREK</h5>
                </div>
            </div>
            <div class="box">
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/glass-of-cold-orange-drink-picture-id1410464968?k=20&m=1410464968&s=612x612&w=0&h=q2qg9K1tQG6KvzRHUymsJ5dmPrMEJmgF-PyBzVSbFL4=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>ES JERUK</h5>
                </div>
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/glass-of-iced-tea-picture-id153691162?k=20&m=153691162&s=612x612&w=0&h=JYTBT-YRCt_ezeA0ntOUd_X8Pc8VSPPiVk9pXu9ViVw=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>ES TEH</h5>
                </div>
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/mulberry-juice-picture-id1391349068?k=20&m=1391349068&s=612x612&w=0&h=r7cB-awXSM_jum1vYnf2QZcwe2mrXLpUNCNQWq91Z-I=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>JUS</h5>
                </div>
                <div class="makanan">
                    <img src="https://media.istockphoto.com/photos/side-view-of-hot-latte-coffee-with-latte-art-in-a-ceramic-green-cup-picture-id1174632449?k=20&m=1174632449&s=612x612&w=0&h=diWe5nqdbAGs0Sq2EirYr6WKwAiMsYwEPhBWSQBJMYE=" alt="" width="150px" height="150px" class="gb"/>
                    <h5>KOPI HITAM</h5>
                </div>
                
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