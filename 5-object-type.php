<?php

class Produk {
    public $judul ,
           $penulis, 
           $penerbit,
           $harga;

           public function __construct($judul = "judul", $penulis  = "penulis", $penerbit ="penerbit", $harga=94589)
           {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
           }

           public function getLabel()
           {
               return "$this->judul, $this->penulis";
           }
}

class CetakInfoProduk{
    /* 
    public function cetak($produk)
    */
    public function cetak(Produk $produk) // penggunaan object Produk menjadi type data
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shinen Group", 400059);
$produk2 = new Produk("Judul diubah", "ini penulis");
// var_dump($produk1);
// var_dump($produk2);
// var_dump($produk2->getLabel());

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
// echo $infoProduk1->cetak("kampret"); muncul erorr karena tidak menggunakan instance dari class Produk



