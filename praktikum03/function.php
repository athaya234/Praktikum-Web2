<?php 
//Buat fungsi umur
function hitungumur($thn_lahir) {
    //code fungsi
    $thn_sekarang = 2023;
    //Hitung Umur
    $umur = $thn_sekarang - $thn_lahir;
    //tampilin umur
    return $umur;
}

//panggil umur
echo "Umur saya adalah: " .  hitungumur(2002);

?>