<?php
// 9: Tính tổng của 20 số đầu tiên trong dãy Fibonacci.
// Quy luật của dãy số Fibonacci: số tiếp theo bằng tổng của 2 số trước, 2 số
// đầu tiên của dãy số là 0, 1. Ví dụ: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, …
// Hàm dưới đây là in ra các số trong dãy Fibonacci. Hãy dùng hàm Fibonacci($n)
// để viết đoạn code in ra tổng của tổng của 20 số đầu tiên trong dãy Fibonacci.

// BÀI NÀY EM CÓ TÌM HIỂU TRÊN MẠNG VÌ HƠI KHÓ HIỂU 


function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("20 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 20; $i ++) {
    echo (fibonacci ( $i ) . " ");
}
?>