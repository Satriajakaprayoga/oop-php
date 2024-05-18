<?php
 require_once 'App/init.php';

// new App\Produk\User();
// echo "
// ";
// new App\Service\User();


/**
 * 
 * adapun cara lain untuk memanggil User yaitu dengan menggunakan "USE"
 * use App\Produk\User;
 * new User();
 * 
 */
// 

// namun dikareanakn terdapat 2 nama class yang sama maka kita menggunakan "use dengan alias"
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo"
";
new ServiceUser();