<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Athaya Saskia Gunasyah - TI01</title>

    <style>
        .c1 {
            border: 2px;
            border-radius: 1em;
            padding: 5px 5px 5px 5px;
        }

        .c2 {
            border: 2px;
            border-radius: 1em;
            padding: 8px 8px 8px 8px;
        }
    </style>
</head>

<body>
    <h1>Belanja Online</h1>
    <hr>

    <div class="c">
        <div class="row">
            <div class="col-sm-8">
                <form method="GET" action="tugas.php">
                    <div class="c1">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label"><b>Customer</b></label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4"><b>Pilihan Produk</b></label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                    <label for="produk_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci">
                                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label"><b>Jumlah</b></label>
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="c2">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                        <li class="list-group-item">TV : Rp.4.200.000</li>
                        <li class="list-group-item">Kulkas : Rp.3.100.000</li>
                        <li class="list-group-item">Mesin Cuci : Rp.3.800.000</li>
                        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
$customer = $_GET['customer'];
$produk = $_GET['produk'];
$jumlah = $_GET['jumlah'];

echo "<br/>Customer :  {$customer} ";
echo "<br/>Produk : {$produk}";
echo "<br/>Jumlah Pembelian : {$jumlah}";

function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
if ($produk == "tv") {
    $total = 4200000 * $jumlah;
    echo '<br/>Total Belanja :' . rupiah($total);
} elseif ($produk == "kulkas") {
    $total = 3100000 * $jumlah;
    echo '<br/> Total Belanja :' . rupiah($total);
} else {
    $total = 3800000 * $jumlah;
    echo '<br/>Total belanja :' . rupiah($total);
}
?>

</html>