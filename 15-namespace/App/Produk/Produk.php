<?php

abstract class Produk{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;
    public function __construct( $judul = "judul", $penulis= "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    // getter
    public function getJudul()
    {
        return $this->judul;
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }

    public function getInfoProduk()
    {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }
}