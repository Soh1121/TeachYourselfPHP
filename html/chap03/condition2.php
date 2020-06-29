<?php
$message = '';

// trueに変換できるものが入っていればそのまま返せる。
print $message ?: '空です。'; // 結果：空です。
