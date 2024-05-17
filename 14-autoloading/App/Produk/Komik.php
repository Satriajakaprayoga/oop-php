<?php

class Komik extends Produk {

    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis  = "penulis", $penerbit ="penerbit", $harga=94589, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit , $harga, $jmlHalaman);
        $this->$jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "- Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}