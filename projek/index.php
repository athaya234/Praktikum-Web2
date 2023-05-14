<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Atha's Dessert</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center bg-white justify-content-md-between py-3 mb-4 fixed-top border-bottom">
        <a href="/" class="d-flex align-items-center  text-dark text-decoration-none">
            <a href="index.php" class="nav-link px-2">Home</a>
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#product" class="nav-link px-2 link-secondary">Menu</a></li>
        </ul>
        <div class="col-md-3">
            <a type="button" href="backoffice.php" class="btn btn-outline-primary me-2">Login</a>
        </div>
    </header>
    <header>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Dessert Box by Athaya</h1>
                <p class="lead fw-normal">^^Hidangan Penutup ang dibuat oleh cinta^^</p>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </header>

    <section class="py-5" id="product">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
                while ($data = mysqli_fetch_array($result)) {
                    echo '';
                    echo '<div class="col mb-5">';
                    echo '<div class="card h-100">';
                    echo '<!-- Product image-->';
                    echo '<div class="col-md-6"><img class="card-img-top mb-8" src="assets/img/DB.jpg" alt="..." />' . $data['gambar'] . '</div>';
                    echo '<!-- Product details-->';
                    echo '<div class="card-body p-4">';
                    echo '<div class="text-center">';
                    echo '<!-- Product name-->';
                    echo '<h5 class="fw-bolder">' . $data['nama'] . '</h5>';
                    echo '<!-- Product reviews-->';
                    echo '<div class="d-flex justify-content-center small text-warning mb-2">';
                    echo '<div class="bi-star-fill"></div>';
                    echo '<div class="bi-star-fill"></div>';
                    echo '<div class="bi-star-fill"></div>';
                    echo '<div class="bi-star-fill"></div>';
                    echo '<div class="bi-star-fill"></div>';
                    echo '</div>';
                    echo '<!-- Product price-->';
                    echo 'Rp ' . number_format($data['harga_jual'], 2);
                    echo '</div>';
                    echo '</div>';
                    echo '<!-- Product actions-->';
                    echo '<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">';
                    echo '<form action="detail.php" method="GET">';
                    echo '<input type="text" hidden name="id_produk" id="inputNama" value=' . $data['id'] . '>';
                    echo '<div class="text-center"><button class="btn btn-outline-dark mt-auto" type="submit">Detail</button></div>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        </div>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'success') {
                    echo "<script type='text/javascript'>alert('Pesanan Berhasil');</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Pesanan Gagal');</script>";
                }
                ?>
            </p>
        <?php endif; ?>
    </section>

    <footer class="py-2 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Atha Dessert 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>