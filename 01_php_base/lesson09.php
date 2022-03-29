﻿<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。

$array = [10, 60, 90, 70, 50];
foreach ($array as $score) {
    if ($score >= 80) {
        echo "{$score}点は「優」です。\n";
    } elseif ($score >= 60) {
        echo "{$score}点は「良」です。\n";
    } elseif ($score >= 40) {
        echo "{$score}点は「可」です。\n";
    } else {
        echo "{$score}点は「不可」です。\n";
    }
}


// for ($i = 0; $i < count($array); $i++) {
//     if ($array[$i] >= 80) {
//         echo "{$array[$i]}点は「優」です。\n";
//     } elseif ($array[$i] >= 60) {
//         echo "{$array[$i]}点は「良」です。\n";
//     } elseif ($array[$i] >= 40) {
//         echo "{$array[$i]}点は「可」です。\n";
//     } else {
//         echo "{$array[$i]}点は「不可」です。\n";
//     }
// }
