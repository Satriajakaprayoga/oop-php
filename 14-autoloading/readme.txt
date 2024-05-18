Autoloding
memanggil class (file) tanpa harus menggunakan require (secara otomatis)

salah satu sintak penggunaan autoloading
spl_autoload_register(function( $class){
    require_once __DIR__ . '/Produk/' .$class . '.php';
});

cek file init.php

