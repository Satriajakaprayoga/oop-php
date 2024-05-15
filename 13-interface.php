<?php

/**
 * 
 * 
 * INTERFACE
 * - Kelas abstrak yang sama sekali tidak memiliki implementasi
 * - Murni merupakan templete untuk kelas turunannya
 * - Tidak boleh memiliki property, digunakan hanya untuk deklarasi method saja
 * - semua method harus dideklrarasikan dengan visibilty public
 * - boleh mendeklarasikan __construct()
 * - Satu kelas boleh mengimplementasikan banyak interface
 * -Dengan menggunakan type-hinting dapat melakukan 'Dependency Ijectrion'
 * - pada akhirnya akan mencapai Polymorphism
 * 
 */

 Class Produk {
    protected $produk =  "makanan";
 }


interface Buah {
    public function makan();
    public function setWarna($warna);
}

// contoh 1
class Apel implements Buah {
// karena class Apel melakukan implement pada buah maka wajib membuat method makan dan setWarna
    public function makan() {
        echo "aku sedang makan buah yang berwarna ";
    }

    public function setWarna($warna)
    {
        echo $this->makan() , $warna;
    }
}

$aksi = new Apel();
$aksi->setWarna("merah");

// contoh 2

class Beli extends Produk implements Buah {

    public function makan() {
        echo  $this->produk . " aku sedang makan buah yang berwarna ";
    }
    public function setWarna($warna)
    {
        echo $this->makan() , $warna;
    }
}

echo "
";

$aksi2 = new Beli();
$aksi2->setWarna("hijau");