<?php

require 'konek.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $cari=mysqli_query($db, 
    "SELECT * FROM pesan WHERE id='$id'");
    $row=mysqli_fetch_array($cari);

    $gambar=$row['nota'];
    $target = "nota/$gambar";
    if (file_exists($target)){
        unlink($target);
    }

    $result=mysqli_query($db, 
    "DELETE FROM pesan WHERE id='$id'");

    

    if($result){
        echo "
            <script>
                alert('Pesanan Berhasil Dihapus');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Pesanan Gagal Dihapus');
            </script>
        ";
    }
}

?>
