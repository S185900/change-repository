<!-- http://localhost/php01/index07.php -->

<!-- 処理の材料となる値のことを引数（パラメータ）といい、結果の値のことを戻り値（返り値）といいます -->

<!-- function 関数名(){
処理内容
return 返り値
} -->


<?php
function outputNumber($a) {
    echo "引数の値は" . $a . "です" . "<br />";
    return;
}
outputNumber(2);

function outputHello(): void {
    echo "Hello World!" . "<br />";
}
outputHello();

function text($number1, $number2) {
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 4);
echo "合計は" . $total . "です" . "<br />";

function add($item1, $item2) {
    $result = $item1 + $item2;
    return $result;
}
$result = add(1, 4);
echo "合計は" . $result . "です" . "<br />";


// Q. 引数に $score1、$score2、$score3 を持ち、
// 合計点が 210 より大きい時「合計点は OO なので合格です」、
// そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。


// function testScore($score1, $score2, $score3) {
//     $total = $score1 + $score2 + $score3;
//     if ($total > 210) {
//         return "合計点は" . $total . "なので合格です";
//     } else {
//         return "合計点は" . $total . "なので不合格です";
//     }
// }
// echo testScore(50, 200, 90) . "<br />";


// function testScore($score1, $score2, $score3) {
//     $total = $score1 + $score2 + $score3;
//     if ($total > 210) {
//         echo  "合計点は" . $total . "なので合格です";
//         return;
//     } else {
//         echo  "合計点は" . $total . "なので不合格です";
//         return;
//     }
// }　
// echo testScore(50, 0, 90) . "<br />";


// function testScore($score1, $score2, $score3) {
//     $total = $score1 + $score2 + $score3;
//     if ($total > 210) {
//         echo  "合計点は" . $total . "なので合格です";
//         return;
//     } else {
//         echo  "合計点は" . $total . "なので不合格です";
//         return;
//     }
// }
// $total = testScore(50, 20, 90);
// echo $total . "<br />";


// 解答例
function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です" . "<br />";
    } else {
        echo $total . "点なので不合格です" . "<br />";
    }
}
echo (exam(80, 10, 90));


// Q. 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。

// function area($triangle_base, $triangle_height, $rectangle_one_side, $trapezoid_upper_base, $trapezoid_lower_base, $trapezoid_height)
// {
//     $triangle_area = $triangle_base * $triangle_height / 2;
//     $rectangle_area = $rectangle_one_side * $rectangle_one_side;
//     $trapezoid_area = ($trapezoid_upper_base + $trapezoid_lower_base) * $trapezoid_height / 2;
// }

// return area(10, 5, 10, 20, 10, 5);

// echo "三角形の面積は" . $triangle_area . "です" . "<br />";
// echo "四角形の面積は" . $rectangle_area . "です" . "<br />";
// echo "台形の面積は" . $trapezoid_area . "です" . "<br />";



// function triangleArea($triangle_base, $triangle_height) {
//     return $triangle_base * $triangle_height / 2;
// }
// function rectangleArea($rectangle_one_side) {
//     return $rectangle_one_side * $rectangle_one_side;
// }
// function trapezoidArea($trapezoid_upper_base, $trapezoid_lower_base, $trapezoid_height) {
//     return ($trapezoid_upper_base + $trapezoid_lower_base) * $trapezoid_height / 2;
// }
// echo "三角形の面積は" . triangleArea(10, 5) . "㎠です" . "\n";
// echo "四角形の面積は" . rectangleArea(10) . "㎠です" . "\n";
// echo "台形の面積は" . trapezoidArea(20, 10, 5) . "㎠です" . "\n";



function triangleArea($triangle_base, $triangle_height) {
    return $triangle_base * $triangle_height / 2;
}
function rectangleArea($rectangle_one_side) {
    return $rectangle_one_side * $rectangle_one_side;
}
function trapezoidArea($trapezoid_upper_base, $trapezoid_lower_base, $trapezoid_height) {
    return ($trapezoid_upper_base + $trapezoid_lower_base) * $trapezoid_height / 2;
}
echo "三角形の面積は" . triangleArea(10, 5) . "㎠です" . "<br />";
echo "四角形の面積は" . rectangleArea(10) . "㎠です" . "<br />";
echo "台形の面積は" . trapezoidArea(20, 10, 5) . "㎠です" . "<br />";





