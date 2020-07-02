<?php
mb_internal_encoding('UTF-8');
$str = 'にわにはにわにわとりがいる';
print mb_strpos($str, 'にわ') . '<br>';       // 結果：0
print mb_strpos($str, 'にわ', 2) . '<br>';    // 結果：4
print mb_strpos($str, 'かに') . '<br>';       // 結果：false（表示されない）
print mb_strrpos($str, 'にわ') . '<br>';      // 結果：6
print mb_strrpos($str, 'にわ', -8) . '<br>';  // 結果：4
