<?php
include('lib/koneksi.php');
$hasil=$con->query("SELECT * FROM `prodak`");

if(isset($_GET['info'])){

    $info= $_GET['info'];
    if($info=='hapus'){
        echo "Data Berhasil Terhapus";
    }
    if($info=='edit'){
        echo "Data Berhasil Di edit";
    }
?>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center">Tabel Master Produk dan Stock Data Produk</h1>
    <table class ="table table-bordered" align="center" style="width:75%; margin-top:2%">
        <thead class ="thead-light">
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Url Gambar</th>
                <th>Stok Awal</th>
                <th>Modify</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($hasil as $data){
                ?>
            <tr>
                <td><?php echo $data['no']; ?></td>
                <td><?php echo $data['kode_produk']; ?></td>
                <td><?php echo $data['nama_produk']; ?></td>
                <td><?php echo $data['harga_produk']; ?></td>
                <td><?php echo $data['satuan']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><img src="<?php echo $data['url_gambar']; ?>style="width: 300px; alt=""></td>
                <?php 
                if ($data['stok_awal'] < 5) {
                    echo "<td style = 'background : red; color : white; text-align : center'>".$data['stok_awal']."</td>";
                } else {
                    echo "<td style='text-align : center'>".$data['stok_awal']."</td>";
                }
                ?>
                <td><a href="form_edit_produk.php?key=<?php echo $data['no']; ?>">edit</a> | <a href="deleteproduk.php?key=<?php echo $data['no']; ?>">delete</a></td>

            </tr>
            <?php }?>
        </tbody>  
    </table>
    </body>
</html>  
