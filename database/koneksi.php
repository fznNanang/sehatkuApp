<?php
    $koneksi = mysqli_connect('localhost','root','','sehatkuApp');
    if ($koneksi) {
        echo "Sukses";
    }else{
        echo "gagal";
    }
?>