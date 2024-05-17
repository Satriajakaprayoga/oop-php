<?php

/**
 * 
 * Agar program dibawah dapat dieksekusi tentunya perlu melakukan require_once di setiap file yang di instansiasi
 * require_once 'App/Produk/Produk.php';
 * require_once 'App/Produk/Game.php';
 * require_once 'App/Produk/Komik.php';
 * 
 * Require diatas tidak efektif jika jumlah filenya banyak
 * untuk itu untuk melakukan instansiasi dibuatkan file baru
 * 
 */

 require_once 'App/init.php';

$produk3 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25048, 0);
$produk4 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

echo $produk3->getInfoProduk();
echo "
";  
echo $produk4->getInfoProduk();
