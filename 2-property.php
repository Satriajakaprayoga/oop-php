<?php

class Property {
    public $judul = "judul",
           $penulis = "penulis", 
           $penerbit = "peneribit",
           $harga = 0;
}

$product1 = new Property();
// ditimpa
$product1-> judul = "naruto";
// var_dump($product1);

$product2 = new Property();
$product2->judul = "Uncharted";
// kita bisa menambah properti baru pada class tersebut dengan cara dibawah
// $product2->tambahProperti = "properti ditambah";
// var_dump($product2);

$product3 = new Property();
$product3->judul = "Naruto";
$product3->penulis = "Masashi Kishimoto";
$product3->penerbit = "Shonen Jump";
$product3->harga = 30000;
var_dump($product3);
echo "Komik : $product3->judul, $product3->penerbit, $product3->harga";

