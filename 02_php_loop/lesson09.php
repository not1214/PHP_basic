﻿<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
  'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
  'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
  'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
// echo count($arr);
$row_sum = [];
for ($i = 1; $i <= count($arr); $i++) {
    $sum = array_sum($arr["r{$i}"]);
    array_push($row_sum, $sum);
}
// print_r($row_sum);

$column_sum = [];
for ($i = 1; $i <= count($arr); $i++) {
    $sum = array_sum(array_column($arr, "c{$i}"));
    array_push($column_sum, $sum);
}
// print_r($column_sum);

$all_sum = array_sum($row_sum)

?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>テーブル表示</title>
  <style>
    table {
      border: 1px solid #000;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid #000;
    }
  </style>
</head>

<body>
  <!-- ここにテーブル表示 -->
  <table>
    <thead>
      <tr>
        <th>_____</th>
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<th>_c{$i}</th>";
        }
        ?>
        <th>横合計</th>
    </thead>
    
    <tbody>
      <?php
        for ($i = 1; $i <= count($arr); $i++) {
            $key = "r{$i}";
            echo "<tr><td>___{$key}</td>";
            for ($j = 1; $j <= count($arr[$key]); $j++) {
                echo "<td>".str_pad($arr[$key]["c{$j}"], 3, "_", STR_PAD_LEFT)."</td>";
            }
            echo "<td>".str_pad($row_sum[$i-1], 5, "_", STR_PAD_LEFT)."</td></tr>";
        }
        ?>
      <tr>
        <td>縦合計</td>
        <?php
        for ($i = 1; $i <= count($column_sum); $i++) {
            echo "<td>".str_pad($column_sum[$i-1], 3, "_", STR_PAD_LEFT)."</td>";
        }
        echo "<td>".str_pad($all_sum, 5, "_", STR_PAD_LEFT)."</td>";
        ?>
      </tr>
    </tbody>
  </table>
</body>

</html>