<?php
include_once("config.php");
if(isset($_POST['id_produk'])){
    $id = $_POST['id_produk'];
    $cat_product = mysqli_query($mysqli, "SELECT * FROM kategori_produk");
    $produk = mysqli_query($mysqli, "SELECT *  FROM produk Where id = '".$id."' ");
    if (!$produk) {
        echo "Error: " . mysqli_error($mysqli);
    }
    $data = mysqli_fetch_array($produk);
}else {
    header("Location: backoffice_produk.php");
}
?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin AD</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Produk
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="backoffice_produk.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="backoffice_kategori.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Kategori Produk</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pesanan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link" href="backoffice.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Semua Pesanan</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <h1>Edit Produk</h1>
                    <div class="registration-form">
                        <form id='formpesanan' action="CRUD.php" method="POST">
                            <input type="text" hidden name="id" name="id" value="<?= $data['id'] ?>">
                            <div class="form-group">
                                <input type="text" class="form-control item" id="kode" name="kode" placeholder="Kode Produk" value='<?= $data['kode'] ?>' required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control item" id="nama" name="nama" placeholder="Nama" value='<?= $data['nama'] ?>' required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control item" id="harga_jual" name="harga_jual" placeholder="Harga Jual" value='<?= $data['harga_jual'] ?>' required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control item" id="harga_beli" name="harga_beli" placeholder="Harga Beli" value='<?= $data['harga_beli'] ?>' required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control item" id="stok" name="stok" placeholder="Stok" value='<?= $data['stok'] ?>' required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control item" id="min_stok" name="min_stok" placeholder="Min Stok" value='<?= $data['min_stok'] ?>' required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control item" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value='<?= $data['deskripsi'] ?>' required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control item" id="kategori_produk_id" list="kategori_list" name="kategori_produk_id" value='<?= $data['kategori_produk_id'] ?>' placeholder="Kategori Produk" required>
                                <datalist id="kategori_list">
                                    <?php while ($data_cat = mysqli_fetch_array($cat_product)) : ?>
                                        <option value="<?= $data_cat['id'] ?>" data-id="<?= $data_cat['nama'] ?>"><?= $data_cat['nama'] ?></option>
                                    <?php endwhile; ?>
                                </datalist>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" value="edit_produk" class="btn btn-outline-dark" name="edit_produk">Edit Produk</button>
                                <button type="submit"  value="delete_produk" name="delete_produk" class="btn btn-outline-danger">Delete</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablepesanan').DataTable({

            });
        });
    </script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>