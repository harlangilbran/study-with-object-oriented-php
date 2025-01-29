<?php 

class produk { //ini class
    public $judul, 
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function  getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap() {
// komik : naruto | masashi kishimoto, shonen jump (Rp. 30000) - 100 halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jmlHalaman} halaman.";
        }else if ($this->tipe == "game") {
            $str .= " ~ {$this->waktuMain} jam.";
        }
        return $str;
    }
    
}

class cetakInfoProduk {
    public function cetak( produk $produk)  {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new produk("naruto", "masashi kishimoto", "shonen jump", 30000, 100, 0, "komik");

$produk2 = new produk("uncharted", "Neil druckman", "sony", 250000, 0, 50, "game");



// komik : naruto | masashi kishimoto, shonen jump (Rp. 30000) - 100 halaman.
// game : uncharted | Neil druckman, sony (Rp. 250000) ~ 50 jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>