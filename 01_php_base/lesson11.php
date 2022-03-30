<?php
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から３日後
// ・現在日時から１２時間前
// ・2020年元旦から現在までの経過日数

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください

// ・現在日時（yyyy年mm月dd日 H時i分s秒）
echo date("Y年m月d日 H時i分s秒\n");

// ・現在日時から３日後
$date_after = strtotime('+3 day');
echo date("Y年m月d日 H時i分s秒\n", $date_after);

// ・現在日時から１２時間前
$date_before = strtotime("-12 hour");
echo date("Y年m月d日 H時i分s秒\n", $date_before);

// ・2020年元旦から現在までの経過日数
$today = date("Y-m-d");
$today = strtotime($today);
$day = strtotime("2020-01-01");
echo ($today - $day) / (60 * 60 * 24) . "日";
