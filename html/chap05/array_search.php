<?php
$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
var_dump(array_search('JavaScript', $data));  // 結果：int(1)
var_dump(array_search('PHP', $data));         // 結果：int(0)
var_dump(array_search('JAVA', $data));        // 結果：bool(false)
var_dump(array_search(15, $data));            // 結果：int(5)
var_dump(array_search(15, $data, true));      // 結果：bool(false)
