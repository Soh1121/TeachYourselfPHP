<?php
$x = 1;
$y = 0;
if ($x === 1)
  if ($y === 1)
    print '変数$x、$yは1です。';
else  // 直近のifに対応
  print '変数$xは1ではありません。';  // 結果：変数$xは1ではありません。