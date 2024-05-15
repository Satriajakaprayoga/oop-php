<?php

/*

    ABSTRACT
    - Sebuah kelas yang tidak dapat di-instansiasi
    - Mendefinisikan interface untuk kelas lain yang menjadi turunannya
    - Berperan sebagai 'Kerangka dasar' untuk kelas turunnannya
    - Memiliki minimal 1 method abstrak
    - Digunakan dalam 'pewarisan' / inheritance untuk 'memaksakan'  implementasi method abstrak yang sama untuk semua kelas turunannya

    KENAPA MENGGUNAKAN ABSTRAK
    - Merepresentasikan ide atau konsep dasar
    - "Composition over inheritance"
    - Salah satu cara menerapkan Polimorphism
    - Sentralisasi logic
    - mempermudah pengerjaan tim

*/

abstract class Buah { //kelas abstrak
    private $warna;

    abstract public function makan(); // mtehod abstrak yang digunakan untuk interface saja dan wajib diimplementasikan di class turunan. 

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}
// ERROR
// class Apel extends Buah {
//     public function bungkus() {
//         echo "waktunya bungkus buah apel";
//     }
// }

// SUCCES
class Apel extends Buah {
    public function makan() {
        echo "waktunya bungkus buah apel";
    }
}

$aksi = new Apel();
echo $aksi->makan();

