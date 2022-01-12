<?php

require_once('connection.php');

if (isset($_POST['submit'])) {
    $nama_penyewa = $_POST['nama_penyewa'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $lama_peminjaman = $_POST['lama_peminjaman'];
    $jaminan = $_POST['jaminan'];
    $harga = $_POST['lama_peminjaman']*50000;


    $insert_sql = "INSERT INTO tbl_rentalps (nama_penyewa, alamat, tanggal, lama_peminjaman, jaminan,harga) 
    VALUES ('$nama_penyewa', '$alamat', '$tanggal', '$lama_peminjaman', '$jaminan','$harga')";
    $insert = $con->query($insert_sql);

    if ($insert) {
        header('location:view.php');
    } else {
        header('location:view.php?pesan=tambah');
    }
}

