<?php
// 引数として数値を渡すと+1して返す関数を作り、
// 返り値を出力してください。

function plus1($num)
{
    return $num + 1;
}

echo plus1(trim(fgets(STDIN)));
