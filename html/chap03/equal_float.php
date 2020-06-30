<?php
CONST EPSILON = 0.00001;
$x = 0.123456;
$y = 0.123455;

// 浮動小数点の比較では誤差が発生するので、誤差をどこまで許容するか定義する
var_dump(abs($x - $y) < EPSILON); // 結果：bool(true)
