<?php
$data = ['和田', '杉山', '杉沼', '長田', '星山'];
// PHP7系では変換前の文字コードを複数指定不可能。
mb_convert_variables('EUC-JP', 'UTF-8', $data);
print_r($data);
