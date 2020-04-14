<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form input</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="form">
    <!-- method post= post mengirimkan data/nilai langsung ke action tanpa menampilkan url -->
    <form action="proses_simpan_produk.php" method="post">
        <table class="table" align = "center" style ="width: 70%; margin-top: 2%">
        <tr class="table-primary" style="color: black; text-align: center">
            <td colspan="3">
                <h1><b>FORM INPUT MASTER dan Stock DATA BARANG </b></h1>
            </td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Kode Produk</td>
            <td><input type="text" class="form-control" name="kode_produk"></td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Nama Produk</td>
            <td><input type="text" class="form-control" name="nama_produk"></td>   
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Harga Produk</td>
            <td><input type="Number" class="form-control" name="harga_produk"></td>   
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Satuan</td>
            <td>
                <select name="satuan" class="form-control">
                    <option value="">Pilih Satuan</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Kg">Kg</option>
                    <option value="Liter">Liter</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Kategori</td>
            <td>
                <select name="kategori" class="form-control">
                        <option value="">Pilih Kategori</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Snack">Snack</option>
                </select>
            </td>
        </tr>
        <tr>
        <td style="font-size: 15px; width:25%">URL Gambar</td>
            <td><input type="url" class="form-control" name="url_gambar"></td>
        </tr>
        <tr>
            <td style="font-size: 15px; width:25%">Stok Awal</td>
            <td><input type="Number" class="form-control" name="stok_awal"></td>
        </tr>
        <!-- <tr>
            <td style="font-size: 15px; width:25%">Jumlah Produk</td>
            <td><input type="Number" class="form-control" name="jumlah"></td>
        </tr> -->
        <tr class="table-primary">
            <td colspan ="3">
                <input type="submit" class="btn btn-primary" value="simpan"/>
            </td>
        </tr>

        </table>
    </form>
</div>
</body>
</html>