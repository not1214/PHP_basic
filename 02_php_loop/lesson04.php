﻿<?php
// 以下をfor文を使用して表示してください。

// 321
// 32
// 3

for ($a = 1; $a <= 3; $a++) {
    // echo $a;
    for ($b = 3; $b >= $a; $b--) {
        // echo $a.$b;
        echo $b;
    }
    echo "\n";
}
