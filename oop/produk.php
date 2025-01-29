<?php 

class produk { //ini class
    public $judul = "judul", 
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

    public function  getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new produk(); // ini objek
// $produk1->judul = "Naruto"; //ini mengakses atribut
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Sailor Moon";
// $produk2->tambahproperty = "wwkwkwk";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
// echo "komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();

// echo "<hr>";
$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "sony";
$produk4->harga = 20000;
echo "komik : " .  $produk4->getLabel();
echo "<br>";
echo "game :  " . $produk4->getLabel();
?>