<?php
// 前置演算
$x = 10;
$y = ++$x;  // 演算を行ってから代入
print $x;   // 結果：11
print "\n";
print $y;   // 結果：11
print "\n";

// 後置演算
$i = 10;
$j = $i++;  // 代入してから演算($j = $i → $i++)
print $i;   // 結果：11
print "\n";
print $j;   // 結果：10
print "\n";
