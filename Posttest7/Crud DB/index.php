<?php
session_start();
require 'konek.php';


if(!isset($_SESSION['login'])){
    echo "<script>
        alert('Silahkan login terlebih dahulu');
        document.location.href='../index.php';
            </script> ";
}

// $result = mysqli_query($db, "SELECT * FROM pesan");


// if(isset($_GET['cari'])){
//     $cari=$_GET['search'];
//     $result= mysqli_query($db, "SELECT * FROM pesan WHERE 
//     nama_produk LIKE '%$cari%' or 
//     jenis LIKE '%$cari%' or 
//     harga LIKE '%$cari%' or 
//     jumlah LIKE '%$cari%' or 
//     tanggal_antar LIKE '%$cari%' or 
//     tanggalPesan LIKE '%$cari%' or 
//     namaPemesan LIKE '%$cari%'");
// }else{
//     $result= mysqli_query($db, "SELECT * FROM pesan");
// }

// $pesanan=[];
// while ($row = mysqli_fetch_array($result)){
//     $pesanan[]=$row;
// }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan</title>
    <link rel="stylesheet" type="text/css" href="../posttest3.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
    
    body{
        margin:0;
        padding:0;
        background:white;
        height:100vh; 
    }

    .center{
        position:absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%,-50%);
        border-radius:10px;
        color: black;
        /* margin-top: 50px; */
    }



    tr th{
        color:black;
        padding: 0 10px;
        font-size: 18px;
        background:skyblue;

    }

    
    td{
        padding:0 10px;   
        font-size: 20px;
        color: black;
        background:white;

        
    }

    table{
        margin-top:100px;
        top:30%;
    }

    .Tambah{
        padding:5px;
        border-bottom: 1px solid;
        background:darkblue;
        border-radius:5px;
        color:white;
    }

    .frame{
        margin-top:50px;
    }

    .edit{
        background:limegreen;
    }
    
    .hapus{
        background:red;
    }
    
    footer{
        margin-top:50%;
    }

    .pencarian {
        display: flex;
        justify-content: right;
        margin-top: 20px;
        margin-bottom: 50px;
        margin-right:40px;
    }

    .kolomsearch {
        padding: 10px 5px;
        width: 300px;
        color:black;
        margin-bottom:40px;

        
    }

    .btncari {
        padding: 10px;
        width: 100px;
        font-size: medium;
        background-color: darkblue;
        color: white;
        border:none;
        border-radius: 10px;
        margin-bottom:100px;

    }

    </style>
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
                    <li><a href="../home.php">HOME</a></li>
                    <li><a href="../produk.php">PRODUK</a></li>
                    <li><a href="../about.php">ABOUT ME</a></li>
                    <li class="aktif"><a href="index.php">PESANAN</a></li>
                    <li><a href="../logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="label">
        <div class="container">
            <p>HOME/PESANAN</p>
        </div>
    </section>
        
    <section>
        <div class="container">
            <div class="frame">
                <h3>Pesanan</h3>
            </div>
            
            <div class="pencarian">
                <form action="" method="get">
                    <input type="text" name="search" autofocus placeholder="Ketikan yang ingin dicari..." class="kolomsearch" autocomplete="off">
                    <input type="submit" name="cari" value="cari" class="btncari" autofocus>
                </form>
            </div>
            <div class="center">
                <table border='1'>
                    <a class="Tambah" href="formPesan.php">Tambah Pesanan</a>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah Produk</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Tanggal Pengantaran</th>
                        <th>Bukti Pembayaran</th>
                        <th colspan='2'>Aksi</th>
                    </tr>

                    <?php 
                        if(isset($_GET['cari'])){
                            $cari=$_GET['search'];
                            $result= mysqli_query($db, "SELECT * FROM pesan WHERE 
                            nama_produk LIKE '%$cari%' or 
                            jenis LIKE '%$cari%' or 
                            harga LIKE '%$cari%' or 
                            jumlah LIKE '%$cari%' or 
                            tanggal_antar LIKE '%$cari%' or 
                            tanggalPesan LIKE '%$cari%' or 
                            namaPemesan LIKE '%$cari%'");
                        }else{
                            $result= mysqli_query($db, "SELECT * FROM pesan");
                        }
                        $i = 1;
                        while($row = mysqli_fetch_array($result)){
                    ?>

                    <tr>
                        <td> <?=$i; ?> </td>
                        <td> <?=$row['namaPemesan']?> </td>
                        <td> <?=$row['nama_produk']?> </td>
                        <td> <?=$row['jenis']?> </td>
                        <td> <?=$row['harga']?> </td>
                        <td> <?=$row['jumlah']?> </td>
                        <td> <?=$row['tanggalPesan']?> </td>
                        <td> <?=$row['tanggal_antar']?> </td>
                        <td><img src="nota/<?=$row['nota']?>" alt="" width=60px></td>
                        <td class="edit"><a  href="edit.php?id=<?=$row['id']?>">Edit</a></td>
                        <td class="hapus"><a  href="hapus.php?id=<?=$row['id']?>">Hapus</a></td>
                    </tr>

                    <?php
                        $i++;
                        }
                    ?>

                </table>
            </div>
        </div>
    </section>
<footer>
    <div class="container">
        <small>Copyright 2022 by Herni Suhartati</small>
    </div>
</footer>
<script src="../posttest3.js"></script>
</body>
</html>

















