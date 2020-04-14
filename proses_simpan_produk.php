<?php
include('lib/koneksi.php');
$kode_produk=$_POST['kode_produk'];
$nama_produk=$_POST['nama_produk'];
$harga_produk=$_POST['harga_produk'];
$satuan=$_POST['satuan'];
$kategori=$_POST['kategori'];
$url_gambar=$_POST['url_gambar'];
$stok_awal=$_POST['stok_awal'];

// print_r($_POST);
$result = $con->exec("INSERT INTO `prodak` (`no`, `kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok_awal`) VALUES (NULL, '$kode_produk', '$nama_produk', '$harga_produk', '$satuan', '$kategori', '$url_gambar', '$stok_awal')");
echo $result;

if($result==TRUE){
    echo "Data Tersimpan Ke Database";
}else{
    echo "Data Gagal Tersimpan Ke Database";
}
?>