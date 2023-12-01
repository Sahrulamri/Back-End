<?php

require_once 'App/init.php';

// $produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
// $produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 10000000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk3);
// $cetakProduk->tambahProduk($produk4);

// echo $cetakProduk->cetak();

// echo "<hr> <br>";

// Alias
use App\Service\User as ServiceUser;
use App\Produk\User as Produkuser;

new ServiceUser();

echo "<br>";
new  ProdukUser();
