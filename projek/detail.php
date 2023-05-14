<?php
include_once("config.php");
$id = $_GET['id_produk'];
$result = mysqli_query($mysqli, "SELECT p.*, k.nama AS kategori  FROM produk AS p JOIN kategori_produk AS k ON p.kategori_produk_id = k.id WHERE p.id = $id");
if (!$result) {
    echo "Error: " . mysqli_error($mysqli);
}
$data = mysqli_fetch_assoc($result);
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
    <header class="bg-dark py-5">

    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <?php
            echo '<div class="row gx-4 gx-lg-5 align-items-center">';
            echo '<div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="assets/img/DB.jpg" style="height: 600px; width:400px; object-fit:cover;" alt="..." />' . $data['gambar'] . '</div>';
            echo '<div class="col-md-6">';
            echo '<div class="small mb-1">Kode : ' . $data['kode'] . '</div>';
            echo '<h1 class="display-5 fw-bolder">' . $data['nama'] . '</h1>';
            echo '<div class="fs-5 mb-5">';
            echo '<span>Rp ' . number_format($data['harga_jual'], 2) . '</span> <br>';
            echo '<span>Stok : ' . $data['stok'] . '</span>';
            echo '</div>';
            echo '<p class="lead">' . $data['deskripsi'] . '</p>';
            echo '<div class="d-flex">';
            echo '<form action="pemesanan.php" method="POST">';
            echo '<input type="number" name="id_produk" id="id_produk" hidden value="' . $data['id'] . '">';
            echo '<input type="number" name="jumlah" id="jumlah" hidden value="1">';
            echo '<button class="btn btn-outline-dark flex-shrink-0" id="submit-btn" type="submit">';
            echo '<i class="bi-cart-fill me-1"></i>';
            echo 'Pesan';
            echo '</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            ?>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">

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
<script>
    window.onload = function() {
        var stock = <?php echo $data['stok'] ?>;
        var minStock = <?php echo $data['min_stok'] ?>;
        console.log(stock);
        // Get a reference to the submit button
        var submitBtn = document.getElementById('submit-btn');

        // Add an event listener to the button
        submitBtn.addEventListener('click', function(event) {
            // If the stock is less than the minimum stock, disable the button
            if (stock < minStock) {
                event.preventDefault(); // Prevent the form from submitting
                submitBtn.disabled = true; // Disable the button
            }
        });
    }
</script>

</html>