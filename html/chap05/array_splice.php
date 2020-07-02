<?php
$data = ['高江', '青木', '片渕', '和田', '花田', '佐藤'];
print_r(array_splice($data, 2, 3, ['日尾', '掛谷', '薄井']));
// 結果：Array( [0] => 片渕 [1] => 和田 [2] => 花田 )
print '<br>';
print_r($data);
// 結果：Array ( [0] => 高江 [1] => 青木 [2] => 日尾 [3] => 掛谷 [4] => 薄井 [5] => 佐藤 )
print '<br>';
print_r(array_splice($data, -3, -2, ['長田', '杉山']));
// 結果：Array ( [0] => 掛谷 )
print '<br>';
print_r($data);
// 結果：Array ( [0] => 高江 [1] => 青木 [2] => 日尾 [3] => 長田 [4] => 杉山 [5] => 薄井 [6] => 佐藤 )
print '<br>';
print_r(array_splice($data, 3));
// 結果：Array ( [0] => 長田 [1] => 杉山 [2] => 薄井 [3] => 佐藤 )
print '<br>';
print_r($data);
// 結果：Array ( [0] => 高江 [1] => 青木 [2] => 日尾 )
print '<br>';
print_r(array_splice($data, 1, 0, ['山田', '矢吹']));
// 結果：Array ( ) Array ( [0] => 高江 [1] => 山田 [2] => 矢吹 [3] => 青木 [4] => 日尾 )
print_r($data);
