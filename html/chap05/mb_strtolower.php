<?php
mb_internal_encoding('UTF-8');
print strtolower('ＷＩＮＧＳプロジェクト<br>');     // 結果：ＷＩＮＧＳプロジェクト
print mb_strtolower('ＷＩＮＧＳプロジェクト<br>');  // 結果：ｗｉｎｇｓプロジェクト
