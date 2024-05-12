<?php

/*

STATIC KEYWORD
- member yang terikat dengan class, bukan dengan object
- nilai static akan selalu tetap meskipun object di-instansiasi berulang kali

*/

class ContohStatic {
    public static $angka = 1;
    public static $nama = "satria";
    public static function hallo()
    {
        return "hallo static";
    }
    public static function halloProperty()
    {
        return "hallo " . self::$nama ;
    }
}

// echo ContohStatic::$angka;
// echo "
// --------------
// ";
// echo ContohStatic::hallo();
// echo "
// --------------
// ";
// echo ContohStatic::halloProperty();
// echo "
// --------------
// ";

class ContohStatic2 {
    public static $angkaStatic = 1;
    public  $angkaBiasa = 1;

    public function angka() 
    {
        return $this->angkaBiasa++ ;
    }
    public function angkaStatic() 
    {
        return self::$angkaStatic++ ;
    }
}

$objbiasa = new ContohStatic2;

echo $objbiasa->angka();
echo $objbiasa->angka();
echo $objbiasa->angka();
echo "
--------------
";

$objbiasa2 = new ContohStatic2;
echo $objbiasa2->angka();
echo $objbiasa2->angka();
echo $objbiasa2->angka();

echo "
--------------
";

$static = new ContohStatic2;
echo $static->angkaStatic();
echo $static->angkaStatic();
echo $static->angkaStatic();

echo "
--------------
";

$static2 = new ContohStatic2;
echo $static2->angkaStatic();
echo $static2->angkaStatic();
echo $static2->angkaStatic();
