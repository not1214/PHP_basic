<?php
// 以下をfor文を使用して表示してください。

// 6
// 54
// 321

$a = 6;
// for ($b = 3; $b >= 1; $b--) {
//     // echo $b;
//     for ($c = 4; $c >= $b+1; $c--) {
//         // echo $b.$c;
//         echo $a;
//         $a--;
//     }
//     echo "\n";
// }

for ($b = 1; $b <= 3; $b++) {
    for ($c = 1; $c <= $b; $c++) {
        echo $a;
        $a--;
    }
    echo "\n";
}
