<?php

// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/User.php';

// require_once 'App/Service/User.php';
/**
 * 
 * Terdapat suatu fungsi yang dapat melakukan hal sama pada kode diatas
 * nama functionnya yaitu spl_autoload_register()
 * 
 */

 
spl_autoload_register(function( $class){
    // App\Produk\User = ["App","Produk", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' .$class . '.php';
});

spl_autoload_register(function( $class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' .$class . '.php';
});