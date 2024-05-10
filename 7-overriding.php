<?php

/* 
OVERRIDING
- Dengan overriding kita dapat membuat sebuah method di class 
child dengan nama yang sama dengan kelas parrentnya atau bisa disebut menimpa method dari parrent class

*/

// Studi kasus menampilkan data sebagai berikut
// Komik: Naruto | Massashi Kishimotom, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game: Uncharted | Neil Druckman, Sony Computer (Rp. 25000) - 50 Jam.

// Tujuan dari overriding ini merapikan kodingan agar tidak menulis kodingan berulang kali jika fungsionalitasnya sama
// Bisa dilihat pada inheritance 2 untuk penulisan kodingan berulang ulang

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

           public function getInfoProduk()
           {
            $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
            return $str;
           }
}

class Komik extends Produk {

    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis  = "penulis", $penerbit ="penerbit", $harga=94589, $jmlHalaman)
    {
        // parrent:: digunakan untuk melakukan overiding method di parrent yaitu class produk
        parent::__construct($judul, $penulis, $penerbit , $harga, $jmlHalaman);
        $this->$jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "- Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}
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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25048, 0);
$produk3 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25048, 0);
$produk4 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

echo $produk3->getInfoProduk();
echo "
";
echo $produk4->getInfoProduk();

/* 

Kesimpulan
Dengan overiding kita bisa membuat nama method pada child yang sama dengan parrent
untuk melakuan overriding tinggal menuliskan parent::nama-method-pada-parrent
*/



