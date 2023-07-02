<?php 
//Bikin Class BMIPASIEN
class bmiPasien {
    //Bikin property
    public $nama, $berat, $tinggi, $umur, $jk;

    // contruct : data nya diset sesuai user
    function __construct($nama, $berat, $tinggi, $umur, $jk) {
        //masukin data
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk; 
    }

    //Bikin method
    public function hasilBMI(){
        //LOgic
        $tinggi_m = $this->tinggi /100;
        //rumus
        $bmi =$this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }

    //Buat method
    public function statusBMI(){
        //simpen data bmi
        $bmi = $this->hasilBMI();
        // cek data menjadi status
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}

// Bikin objek
// $pasien = new bmiPasien("Aditya", "50", "170", "20", "L");
// echo "nama :" . $pasien->nama . "<br>";
// echo "BMI :" . $pasien->hasilBMI() . "<br>";
// echo "Status BMI: " . $pasien->statusBMI() . "<br>";

?>