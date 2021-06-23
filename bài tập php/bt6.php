<?php
// Kiểm tra số nguyên tố trong PHP.
function check_prime_number($n){
    if($n <= 1) 
    return false;
    
    for($i = 2; $i <= $n - 1;$i++){
        if($n % $i == 0)
        return false;
    }
    return true;
}
if(check_prime_number(5))
    echo"số nguyên tố";
else{
    echo"hợp số nguyên tố";
}