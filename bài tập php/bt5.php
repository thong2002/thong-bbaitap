<?php
    //  Viết chương trình tính giai thừa của n. Giai thừa của 1 số là tích các
    // số liên tiếp từ 1 đến số đó. Trường hợp đặc biệt, giai thừa của 0 và 1 là 1.



$a = 5;
$b = 1;
$c = 10;
$d = 0;
 

function tinhGiaithua($n) {
    if ($n > 0) {
        return $n * tinhGiaithua ( $n - 1 );
    } else {
        return 1;
    }
}
 

echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
echo ("Giai thừa của " . $d . " là: " . tinhGiaithua ( $d ) . "<br>");
?>