<?php
// 以下をfor文を使用して表示してください。

// 1
// 21
// 321

// $array = [1, 21, 321];
// for ($i = 0; $i < count($array); $i++) {
//     echo $array[$i] . "\n";
// }

for ($a = 2; $a >= 0; $a--) {
    // echo $a;
    for ($b = 3; $b >= $a + 1; $b--) {
        // echo $b.$a."\n";
        echo $b - $a;
    }
    echo  "\n";
}
