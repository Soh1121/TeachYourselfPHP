<?php
for ($i = 1; $i < 10; $i++) {
  for ($j = 1; $j < 10; $j++) {
    $result = $i * $j;
    // break, continueの後ろに抜けたいループ階層数を指定可能
    if ($result > 40) { break 2; }
    print "{$result} &nbsp;";
  }
  print '<br>';
}
