<?php

/* 
    iteration for constructor
    https://www.w3schools.com/php/php_oop_constructor.asp
*/

class NoConstructor {
    public $judul = "judul",
           $penulis = "penulis", 
           $penerbit = "penerbit",
           $harga = 0;

           public function getLabel()
           {
               return "$this->penulis, $this->judul";
           }
}

$produk1 = new NoConstructor();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shnen Jump";
$produk1->harga = 40000;

$produk2 = new NoConstructor();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Sonny Computer";
$produk2->harga = 500000;

// var_dump($produk1);
// var_dump($produk2);

class Constructor {
    public $judul = "judul",
           $penulis = "penulis", 
           $penerbit = "penerbit",
           $harga = 0;

           public function __construct($judul, $penulis,$penerbit ="penerbit from construct", $harga=94589)
        //    public function __construct($judul, $penulis, $penerbit, $harga)
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

$produk3 = new Constructor("Naruto", "Masashi Kishimoto", "Shinen Group", 400059);
$produk4 = new Constructor("Judul diubah", "ini penulis");
var_dump($produk3);
var_dump($produk4);
var_dump($produk4->getLabel());

/* 

CONSTRUCTOR
- Ini adalah metode khsusus yang akan dijalankan pertama kali secara otomatis setiap membuat instance dari sebuah class
- Ini dibutuhkan saat berhubungna dengan DATABASE
- 
*/


