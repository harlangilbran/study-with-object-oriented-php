<?php
// //DEFINE = tidak bisa simpan didalam kelas
// define('NAMA', 'Harlan Gilbran'); //usahakan untuk mengunakan konstanta memakai huruf besar

// echo NAMA;
// //----------------------------------------------------------------------------
// // const bisa disimpan dalam kelas
// const UMUR = 21; //konstanta juga bisa dibuat dengan const
// echo "<br>";
// echo UMUR;

// class Coba {
//     const NAMA = 'harlan gilbran';
// }
// echo Coba::NAMA;

// magic constant
// contoh salah satu magic constant
class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba();
echo $obj->kelas;
?>