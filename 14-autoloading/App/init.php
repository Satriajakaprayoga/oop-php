<?php

// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/Komik.php';

/**
 * 
 * Terdapat suatu fungsi yang dapat melakukan hal sama pada kode diatas
 * nama functionnya yaitu spl_autoload_register()
 * 
 */

 
spl_autoload_register(function( $class){
    require_once __DIR__ . '/Produk/' .$class . '.php';
});