<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

$yen = 10000;   // 購入金額
$product = 150; // 商品金額

function calc($yen, $product) {
    // この関数内に処理を記述
    $arr = [10000, 5000, 1000, 500, 100, 50, 10, 1];
    $result = [];
    if ($yen >= $product) {
        $change = $yen - $product;
        foreach ($arr as $value) {
            $result[$value] = intdiv($change, $value);
            $change -= $value * $result[$value];
        }
        return $result;
    } else {
        $lack = abs($product - $yen);
        return $lack;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php
        $yen = trim(fgets(STDIN));
        $product = trim(fgets(STDIN));
        
        $result = calc($yen, $product);
        if (is_array($result)) {
            foreach ($result as $key => $value) {
                if ($key == 10000 || $key == 5000 || $key == 1000) {
                    echo "{$key}円札×{$value}枚、";
                } elseif ($key == 1) {
                    echo "{$key}円玉×{$value}枚。";
                } else {
                    echo "{$key}円玉×{$value}枚、";
                }
            }
        } else {
            echo "{$result}円足りません。\n";
        }
        ?>
    </section>
</body>
</html>