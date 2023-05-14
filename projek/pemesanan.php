<?php
include_once("config.php");
if (isset($_POST['id_produk'])) {
    $id = $_POST['id_produk'];
    $product =  mysqli_query($mysqli, "SELECT p.*, k.nama AS kategori  FROM produk AS p JOIN kategori_produk AS k ON p.kategori_produk_id = k.id WHERE p.id = $id");
}  
else{
    $product = mysqli_query($mysqli, "SELECT p.*, k.nama AS kategori  FROM produk AS p JOIN kategori_produk AS k ON p.kategori_produk_id = k.id");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Atha's Dessert</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

    <header class="d-flex flex-wrap align-items-center justify-content-center bg-white justify-content-md-between py-3 mb-4 fixed-top border-bottom">
        <a href="/" class="d-flex align-items-center  text-dark text-decoration-none">
            <a href="index.php" class="nav-link px-2">Home</a>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php#product" class="nav-link px-2 link-secondary">Menu</a></li>
        </ul>
        <div class="col-md-3">
            <a type="button" href="backoffice.php" class="btn btn-outline-primary me-2">Login</a>
        </div>
    </header>

    <header>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Dessert Box by Athaya</h1>
                <p class="lead fw-normal">^^Silahkan diorder^^</p>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </header>

    <section class="py-5 px-5 bg-light">
        <div class="registration-form">
            <form id='formpesanan' action="CRUD.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control item" list="produk_list" id="id_produk" name="id_produk" placeholder="Produk" >
                    <datalist id="produk_list">
                        <?php while ($data = mysqli_fetch_array($product)) : ?>
                            <option value="<?= $data['id'] ?>" data-id="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                        <?php endwhile; ?>
                    </datalist>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="Jumlah" required>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control item" id="tanggal" name="tanggal" placeholder="Tanggal" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control item" id="email" name="email" placeholder="Email Pembeli" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="nama_pemesan" name="nama_pemesan" placeholder="Nama Pembeli" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="alamat_pemesan" name="alamat_pemesan" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="no_hp" name="no_hp" placeholder="No HP." required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" value="pesanan" class="btn btn-outline-dark" name="pesanan">Buat Pesanan</button>
                </div>

            </form>
        </div>
    </section>

    <footer class="py-2 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Atha Dessert 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>