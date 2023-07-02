<?php 

class PersegiPanjang{
    public $p, $l;

    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function L(){
        $luas = $this->panjang * $this->lebar;
        return ($luas);
    }

    public function KLL(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return($keliling);
    }
}
?>