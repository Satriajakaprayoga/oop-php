<?php

/* 
INHERITANCE
- Mencipatkan hierarki antar kelas
- Child Class, mewarisi semua properti dan method dari parent-nya(yang visible)
- Child Class, memperluas (extends) fungsionalitas dari parrent-nya


*/

// Tanpa menggunakan Inheritance untuk menampilkan data sebagai berikut
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

           public function getInfoLengkap()
           {
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
            if($this->tipe == "Komik"){
                $str .= " - {$this->jmlHalaman} Halaman.";
            } else if($this->tipe == "Game"){
                $str .= " - - {$this->waktuMain} Jam. ";
            }
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

// echo $produk1->getInfoLengkap();
// echo $produk2->getInfoLengkap();

/* 

Kesimpulan
Tanpa menggunakan inheritance kita wajib menambah parameter baru dari 

*/



