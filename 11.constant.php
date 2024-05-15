<?php

/* 

Constant
Adalah sebuah indentifier untuk menyimpian sebuah nilai yang nilai-nya tidak dapat berubah (constan)

terdapat 2 cara untuk membuat constan
1. define()
2. const

jika menggunakan constant pastikan menggunakan nama dengan huruf besar semua

define()
tidak bisa digunakan di dalam class

class Constan {
    define("ISERROR", "ERROR")
}

const
bisa digunakan di dalam class

class Constan {
    const ISERROR = "TIDAK ERROR"
}



*/

define('NAMA', 'satria jaka prayoga');
const UMUR = 32;
// untuk mengaksesnya tidak usah menggunakan "$"
echo NAMA;
echo UMUR;

class Constan {
    const ISERROR = "TIDAK ERROR";
}

echo Constan::class;


// DALAM PHP TERDAPAT MAGIC CONSTANT, BERIKUT SALALH SATU CONSTANS DALAM PHP

echo __LINE__;
echo __DIR__;

// DAN MASIH BANYAK LAGI