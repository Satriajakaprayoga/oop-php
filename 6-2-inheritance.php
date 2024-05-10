<?php

/* 
INHERITANCE
- Mencipatkan hierarki antar kelas
- Child Class, mewarisi semua properti dan method dari parent-nya(yang visible)
- Child Class, memperluas (EXTENDS) fungsionalitas dari parrent-nya
*/

// menggunakan Inheritance untuk menampilkan data sebagai berikut
// Komik: Naruto | Massashi Kishimotom, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game: Uncharted | Neil Druckman, Sony Computer (Rp. 25000) - 50 Jam.

class Produk {
    public $judul ,
           $penulis, 
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

           public function __construct($judul = "judul", $penulis  = "penulis", $penerbit ="penerbit", $harga=94589, $jmlHalaman = 300, $waktuMain = 30, $tipe)
           {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->jmlHalaman = $jmlHalaman;
                $this->waktuMain = $waktuMain;
                $this->tipe = $tipe;
           }

           public function getLabel()
           {
               return "$this->judul, $this->penulis";
           }

           public function getInfoProduk()
           {
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
            return $str;
           }
}

class Komik extends Produk {
    public function getInfoProduk(){
        $str = "- Komik : {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}
class Game extends Produk {
    public function getInfoProduk(){
        $str = "- Game : {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk) 
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0,'Komik');
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25048, 0, 93 ,"Game");
$produk3 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25048, 0, 93 ,"Game");
$produk4 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0,'Komik');

echo $produk3->getInfoProduk();
echo "
";
echo $produk4->getInfoProduk();

/* 

Kesimpulan
Tanpa menggunakan inheritance kita wajib menambah parameter baru dari 

*/



