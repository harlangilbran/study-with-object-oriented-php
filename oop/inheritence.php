<?php 

class produk { //ini class
    public $judul, 
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function  getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    
}

class komik extends produk {
    public function getInfoProduk() {
          $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman.";
          return $str;
    }
}
class Game extends produk {
    public function getInfoProduk() {
          $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~{$this->waktuMain} Jam.";
          return $str;
    }
}
class cetakInfoProduk {
    public function cetak( produk $produk)  {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100, 0);

$produk2 = new Game("uncharted", "Neil druckman", "sony", 250000, 0, 50);



// komik : naruto | masashi kishimoto, shonen jump (Rp. 30000) - 100 halaman.
// game : uncharted | Neil druckman, sony (Rp. 250000) ~ 50 jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>