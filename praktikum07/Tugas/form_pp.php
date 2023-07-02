<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <?php
    if (isset($_POST["submit"])) {
        require_once "class_pp.php";

        $p = $_POST["panjang"];
        $l = $_POST["lebar"];

        $pp = new PersegiPanjang($p, $l);
    }

    ?>
</head>

<body>
    <div class="container">
        <h2 align="center">Luas dan Keliling Persegi Panjang</h2>
        <hr>
        <form method="POST" action="form_persegipanjang.php">
            <div class="form-group row">
                <label for="panjang" class="col-4 col-form-label">Panjang</label>
                <div class="col-8">
                    <input id="panjang" name="panjang" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-4 col-form-label">Lebar</label>
                <div class="col-8">
                    <input id="lebar" name="lebar" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <div align="center">
            <h2>Hasil</h2>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Panjang</th>
                        <th scope="col">Lebar</th>
                        <th scope="col">Keliling</th>
                        <th scope="col">Luas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $pp->panjang; ?>
                        </td>
                        <td>
                            <?= $pp->lebar; ?>
                        </td>
                        <td>
                            <?= $pp->KLL(); ?>
                        </td>
                        <td>
                            <?= $pp->L(); ?>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>

    </div>
</body>

</html>