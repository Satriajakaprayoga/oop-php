<?php

/*

VISIBILLITY
- Konsep yang digunakan untuk mengatus akses dari "property" dan "method" pada sebuah objek
- Ada 3 keyword visibillity yaitu "public, protected dan private"
1. PUBLIC, dapat digunakan di mana saja, bahkan di luar kelas
2. PROTECTED, hanya dapat digunakan di dalam sebuah kelas beserta turunannya
3. PRIVATE, hanya dapat digunakan di dalam sebuah kelas tertentu saja

Kenapa perlu mengunakan visibillity
- Hanya memperlihatkan aspek dari class yang dibutuhkan oleh 'client'
- Menentukan kebutuhan yang jelas untuk object
- Memberikan kendali pada kode untuk menghindari "bug"

*/


class Produk {
    public $judul ,
           $penulis, 
           $penerbit;

    protected $harga;

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