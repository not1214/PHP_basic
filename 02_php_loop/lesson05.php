﻿<?php
// 以下をfor文を使用して表示してください。

// 3
// 32
// 321

for ($a = 3; $a >= 1; $a--) {
    // echo $a;
    for ($b = 3; $b >= $a; $b--) {
        // echo $a.$b;
        echo $b;
    }
    echo "\n";
}
