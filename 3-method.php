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
$methodGetLabel = new Method();

echo $method->method();
echo $methodGetLabel->getLabel();
