<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
include('lib/koneksi.php');
$pk = $_GET['key'];
$hasil = $con->query("SELECT * FROM `prodak` WHERE `no`= $pk");
foreach ($hasil as $data){
?>

    <div class="form">
    <!-- method post= post mengirimkan data/nilai langsung ke action tanpa menampilkan url -->
    <form action="prosesedit.php" method="post">
        <table class="table" align = "center" style ="width: 70%; margin-top: 2%">
        <tr class="table-primary" style="color: black; text-align: center">
            <td colspan="3">
                <h1><b>FORM EDIT INPUT MASTER dan Stock DATA BARANG </b></h1>
            </td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%"><input type="hidden" class="form-control" name="no" value="<?php echo $data['no']; ?>">Kode Produk</td>
            <td><input type="text" class="form-control" name="kode_produk" value="<?php echo $data['kode_produk']; ?>"></td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Nama Produk</td>
            <td><input type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"></td>   
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Harga Produk</td>
            <td><input type="Number" class="form-control" name="harga_produk" value="<?php echo $data['harga_produk']; ?>"></td>   
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Satuan</td>
            <td>
                <select name="satuan" class="form-control">
                    <option value="">Pilih Satuan</option>
                    <option <?php if ($data['satuan'] == "Pcs"){ echo "selected=selected"; } ?> value="Pcs">Pcs</option>
                    <option <?php if ($data['satuan'] == "Kg"){ echo "selected=selected"; } ?>  value="Kg">Kg</option>
                    <option <?php if ($data['satuan']== "Liter"){ echo "selected=selected"; } ?> value="Liter">Liter</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Kategori</td>
            <td>
                <select name="kategori" class="form-control">
                        <option value="">Pilih Kategori</option>
                        <option <?php if ($data['kategori']== "Minuman"){ echo "selected=selected"; } ?> value="Minuman">Minuman</option>
                        <option <?php if ($data['kategori']== "Makanan"){ echo "selected=selected"; } ?> value="Makanan">Makanan</option>
                        <option <?php if ($data['kategori']== "Snack"){ echo "selected=selected"; } ?> value="Snack">Snack</option>
                </select>
            </td>
        </tr>
        <tr>
        <td style="font-size: 15px; width:25%">URL Gambar</td>
            <td><input type="text" class="form-control" name="url_gambar" value="<?php echo $data['url_gambar']; ?>"></td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Stok Awal</td>
            <td><input type="Number" class="form-control" name="stok_awal" value="<?php echo $data['stok_awal']; ?>"></td>
        </tr>
        <!-- <tr>
            <td style="font-size: 15px; width:25%">Jumlah Produk</td>
            <td><input type="Number" class="form-control" name="jumlah"></td>
        </tr> -->
        <tr class="table-primary">
            <td colspan ="3">
                <input type="submit" class="btn btn-primary" value="edit"/>
            </td>
        </tr>

        </table>
    </form>
<?php } ?>
</div>
</body>
</html>
