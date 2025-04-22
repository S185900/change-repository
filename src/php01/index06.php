<?php

// http://localhost/php01/index06.php

// for 文は、繰り返す条件を（）のなかで定義して、処理を繰り返します。
// for ($i = 初期値; $i <= 回数; 増減式) {
// 処理
// }

// while (条件) {
// 真の時に実行
// 繰り返しの処理の中で変数の値を変化させる
// }

echo "=====for文=====" . "<br />";
for ($i = 0; $i < 4; $i++) {
  echo $i;
}

echo "<br />";

for ($num = 0; $num <= 4; $num++) {
  echo $num;
}

echo "<br />" . "<br />";

echo "Q. for 文を使用して、結果が以下のようになるコードを記述しましょう。" . "<br />";

for ($multiple_of_2 = 1; $multiple_of_2 <= 5; $multiple_of_2++) {
  echo $multiple_of_2 * 2 . "<br />";
}

echo "<br />" . "<br />";

echo "=====while文 break continue =====" . "<br />";

$i = 0;
while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}

echo "<br />" . "<br />";

$e = 0;
while ($e < 3) {
  echo $e . '<br />';
  $e += 1;
}

echo "<br />" . "<br />";
echo "（for文）" . "<br />";

for ($w = 0; $w < 3; $w++) {
  echo $w . "<br />";
}

echo "<br />" . "<br />";


echo "Q. while 文を使用して、結果が以下のようになるコードを記述しましょう。" . "<br />";
$count = 0;
while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}

echo "<br />" . "<br />";

$count = 1;
while ($count <= 20) {
  echo $count . "<br />";
  $count += 1;
}

echo "<br />" . "<br />";

$count = 0;
while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}

echo "<br />" . "<br />";

$count = 0;
while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}

echo "<br />" . "<br />";

echo "=====break=====" . "<br />";

$r = 0;
while ($r < 10) {
  if ($r == 5) {
    break;
    // $rが5の時、ループから抜ける。
  }
  echo "break・・・" . $r . "<br />";
  $r++;
}

echo "<br />" . "<br />";

echo "=====continue=====" . "<br />";

$t = 0;
while ($t < 10) {
  if ($t == 5) {
    $t++;
    continue;
    // $tが5の時、$tに1を足す処理をし、スキップをする。
  }
  echo "continue・・・" . $t . "<br />";
  $t++;
}

echo "<br />" . "<br />";

echo "Q. while 文を使用して、結果が以下のようになるコードを記述しましょう。" . "<br />";

$u = 0;
while ($u <= 100) {
  if ($u === 20) {
    break; // count が 20 となったときに break されるようにし、処理を終了
  }
  if ($u % 3 === 0) {
    $u++;
    continue; // $tが3で割り切れる数の時、$uに1を足す処理をし、スキップをする。
  }
  echo "count・・・" . $u . "<br />";
  $u++;
}


echo "<br />" . "<br />";

echo "=====do...while 文=====" . "<br />";

$p = 0;
do {
  echo "num=" . $p . '<br />';
  $p++;
} while ($p < 5);

echo "<br />" . "<br />";

$l = 0;
do {
  $l++;
  echo "num=" . $l . '<br />';
} while ($l < 5);

echo "<br />" . "<br />";

echo "Q. do...while 文を使用して、結果が以下のようになるコードを記述しましょう。" . "<br />";

$f = 0;
do {
  echo "num=" . $f . '<br />';
  $f++;
} while ($f < 3);

echo "<br />" . "<br />";

$num = 0;
do {
  echo 'num = ' . $num . '<br />';
  $num += 1;
} while ($num < 3);

echo "<br />" . "<br />";

echo "Q. FizzBuzz問題を解いてみよう。" . "<br />";

echo "=====for文=====" . "<br />";

for ($multiple = 1; $multiple <= 50; $multiple++)
{
  if ($multiple % 3 == 0 && $multiple % 5 == 0)
  {
    echo $multiple . "・・・FizzBuzz" . "<br />";
  } elseif ($multiple % 3 == 0) {
    echo $multiple . "・・・Fizz" . "<br />";
  } elseif ($multiple % 5 == 0) {
    echo $multiple . "・・・Buzz" . "<br />";
  } else {
    echo $multiple . "・・・それ以外の数字" . "<br />";
  }
}

echo "<br />" . "<br />";

echo "Q. 二重ループを使用して、結果が以下のようになるコードを記述しましょう。" . "<br />";

for ($i = 1; $i < 6; $i++) { //行のループ を担当
  for ($j = 1; $j < 6; $j++) { //列のループ を担当
    echo "●";
  }
  echo "<br />";
}

