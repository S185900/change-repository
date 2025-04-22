<?php

echo "▼ehco とは文字列などを出力する際に使用する";
echo "<br />" . "<br />";


echo "処理１＞＄items = ”JavaScript, HTML, CSS, PHP, MySQL”；";
echo "<br />";
$items = "JavaScript, HTML, CSS, PHP, MySQL";
// var_dump($items);
echo "<br />" . "<br />";


echo "処理２＞＄items = ”PHP”；";
echo "<br />";
$items = "PHP";
// var_dump($items);
echo "<br />" . "<br />";


echo "処理３＞echo ＄items；";

echo "<br />";
echo $items;
echo "<br />";
echo "（後から代入したデータが先に代入されたデータを上書き）";
echo "<br />" . "<br />";
echo "=============================================================";
echo "<br />" . "<br />";

$q = "JavaScript";
echo "🔻処理＞＄q = ”JavaScript”;　echo ＄q;";
echo "<br />";
echo $q;
echo "<br />" . "<br />";
echo "=============================================================";
echo "<br />" . "<br />";

echo "▼定数は、例えば税率のように固定の値を表現する時に使う";
echo "<br />" . "<br />";
define("TAX_RATE", 0.10);  // 10% の税率
$price = 1000;
$tax = $price * TAX_RATE; // 1000円の商品の税額を計算
$total_price = $price + $tax;
echo "税込価格は " . $total_price . " 円です";


echo "<br />" . "<br />";
echo "=============================================================";
echo "<br />" . "<br />";









