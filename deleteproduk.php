<?php
include('lib/koneksi.php');
$key=$_GET['key'];
$hasil=$con->query("DELETE FROM `prodak` WHERE `no`=$key ");

if($hasil==TRUE){
    // echo "Data Berhasil Dihapus";
    header("location:dataproduk.php?info=hapus ");
}else{
    echo "Data Gagal Dihapus";
}
?>