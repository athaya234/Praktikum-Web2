<?php
// echo "Hello World";

$nama = "Athaya Saskia Gunasyah";
$jurusan = "Teknik"; 
$semester = 6;

echo "Nama saya adalah : " . $nama;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $Nama; ?></h2>
    <p>
        Saya kuliah dijurusan <?= $jurusan; ?>
    </p>
    <p>
        Saat ini saya semester <?= $semester; ?>
    </p>
</body>
</html>