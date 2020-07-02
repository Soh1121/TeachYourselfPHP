<?php
$ary1 = [1, 3, 5];
$ary2 = [2, 4, 6];
$result = array_merge($ary1, $ary2);
print_r($result);
// 結果：Array([0] => 1 [1] => 3 [2] => 5 [3] => 2 [4] => 4 [5] => 6)

$assoc1 = ['Apple' => 'Red', 'Orange' => 'Yellow', 'Melon' => 'Green'];
$assoc2 = ['Grape' => 'Purple', 'Apple' => 'Green', 'Strawberry' => 'Red'];
$result = array_merge($assoc1, $assoc2);
// キーが重複している場合は上書き
print_r($result);
// 結果：Array([Apple] => Green [Orange] => Yellow [Melon] => Green [Grape] => Purple [Strawberry] => Red)
