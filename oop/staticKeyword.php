<?php 
// class contohStatic {
//     public static $angka = 1; //propert
//     public static function halo() {  //metod
//         return "halo " . self::$angka++ . " kali.";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

class contoh {
    public static $angka = 1;
    public function halo() {
        return "halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
?>