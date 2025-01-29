<?php 

class produk { //ini class
    public $judul, 
    $penulis,
    $penerbit,
    $harga;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;


    }

    public function  getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new produk("naruto", "masashi kishimoto", "shonen jump", 30000);

$produk2 = new produk("uncharted", "Neil druckman", "sony", 250000);

echo "komik : " .  $produk1->getLabel();
echo "<br>";
echo "game :  " . $produk2->getLabel();
?>