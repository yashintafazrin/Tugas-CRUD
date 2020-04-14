<?php
include('lib/koneksi.php');
$pk = $_POST['no'];
$kode_produk=$_POST['kode_produk'];
$nama_produk=$_POST['nama_produk'];
$harga_produk=$_POST['harga_produk'];
$satuan=$_POST['satuan'];
$kategori=$_POST['kategori'];
$url_gambar=$_POST['url_gambar'];
$stok_awal=$_POST['stok_awal'];

$hasil=$con->query("UPDATE `prodak` SET `kode_produk` = '$kode_produk', `nama_produk` = '$nama_produk', `harga_produk` = '$harga_produk', `satuan` = '$satuan', `kategori` = '$kategori', `url_gambar` = '$url_gambar', `stok_awal` = '$stok_awal' WHERE `no` = $pk");

if($hasil==TRUE){
    echo "Berhasil Edit Data";
    header("location:dataproduk.php?info=edit ");
}else{
    echo "gagal edit";
}

?>