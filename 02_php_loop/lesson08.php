﻿<?php
// 以下をfor文を使用して表示してください。

// 123
// *12
// **1

for ($a = 3; $a >= 1; $a--) {
    for ($b = 2; $b >= $a; $b--) {
        echo "*";
    }
    for ($c = 1; $c <= $a; $c++) {
        echo $c;
    }
    echo "\n";
}
