<?php

/*

SETTER & GETTER
- Ini berguna untuk mengakses (set atau get) property yang visibillitynya private
- salah satu contoh kegunaannya yaitu untuk validasi

more info
https://www-geeksforgeeks-org.translate.goog/what-are-getters-and-setters-methods-in-php/?_x_tr_sl=en&_x_tr_tl=id&_x_tr_hl=id&_x_tr_pto=wa

*/

/*

studi kasus
bagaimana cara mengubah properti pada class produk yang visibilitynya private
- cek $judul ?
- set $judul = judul diubah

*/

class Produk {
    private $judul ,
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

            //  setter
           public function setJudul($judul)
           {
            return $this->$judul = $judul;
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


echo "
----------------------------
";
echo $produk1->getJudul();
echo "
----------------------------
";
echo $produk1->setJudul("judul diubah");