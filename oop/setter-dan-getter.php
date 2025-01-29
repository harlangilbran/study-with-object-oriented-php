<?php 

class produk { //ini class
    private $judul, 
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
   public function setJudul($judul) {
    $this->judul = $judul;
   }
    public function getJudul() {
        return $this->judul;
    }
      public function setPenulis($penulis) {
       $this->penulis = $penulis;
    }
      public function getPenulis() {
        return $this->penulis;
    }
     public function setPenerbit($penerbit) {
       $this->penerbit = $penerbit;
    }
      public function getPenerbit() {
        return $this->penerbit;
    }
     public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }
      public function getDiskon() {
        return $this->diskon;
    }
     public function setHarga($harga) {
       $this->harga = $harga;
    }
    public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jmlHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;

    }
    public function getInfoProduk() {
          $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
          return $str;
    }
}
class Game extends produk {
    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga,$waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk() {
          $str = "Game : " . parent::getInfoProduk() . " ~{$this->waktuMain} Jam.";
          return $str;
    }
}
class cetakInfoProduk {
    public function cetak( produk $produk)  {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);

$produk2 = new Game("uncharted", "Neil druckman", "sony", 250000, 50);



// komik : naruto | masashi kishimoto, shonen jump (Rp. 30000) - 100 halaman.
// game : uncharted | Neil druckman, sony (Rp. 250000) ~ 50 jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("harlan gilbran"); //code ini untuk mengganti set 
echo $produk1->getPenulis();

?>