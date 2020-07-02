<?php
$data = ['PHP', '' => 'JavaScript', 'PHP', 'Java', 'C#', '15'];
if(!array_search('PHP', $data)) {
  print '見つかりませんでした。<br>';
}

if(!in_array('PHP', $data)) {
  print '見つかりませんでした。';
} else {
  print '見つかりました。';
}
