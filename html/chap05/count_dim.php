<?php
$data = [
  ['X-1', 'X-2', 'X-3'],
  ['Y-1', 'Y-2', 'Y-3'],
  ['Z-1', 'Z-2', 'Z-3']
];
print count($data);                   // 結果：3
print '<br>';
print count($data, COUNT_RECURSIVE);  // 結果：12
