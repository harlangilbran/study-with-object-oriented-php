<?php 
require_once 'App/init.php';

$produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);
$produk2 = new Game("uncharted", "Neil druckman", "sony", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
echo '<hr>';
new Coba();
?>