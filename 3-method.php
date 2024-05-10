<?php

class Method {
    public $judul = "judul",
           $penulis = "penulis", 
           $penerbit = "penerbit",
           $harga = 0;

           public function getLabel()
           {
               return "$this->penulis, $this->judul";
           }

        public function method(){
            return "hallo method";
        }
    /* 
        method ini salah karena tidak bisa mengambil langsung property secara langsung
        terdapat variable function

        public function getLabel()
        {
            return "$penulis, $penerbit";
        }
    */
}

$method = new Method();
var_dump($method->method());
echo $method->method();
$methodGetLabel = new Method();
echo $methodGetLabel->getLabel();
