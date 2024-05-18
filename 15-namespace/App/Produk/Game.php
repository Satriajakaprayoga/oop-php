<?php

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis  = "penulis", $penerbit ="penerbit", $harga=94589, $waktuMain)
    {
        parent::__construct($judul , $penulis , $penerbit , $harga, $waktuMain);
        $this->$waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "- Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}