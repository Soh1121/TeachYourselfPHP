<?php
printf('%sは%sです。<br>', 'ニンザブロウ', 'ハムスター');
  // 結果：ニンザブロウはハムスターです。
printf('売上平均（前月比）：%0-8.3f<br>', 0.198765);
  // 結果：売上平均（前月比）：0.199000
printf("売上平均（前月比）：%'*10.3e<br>", 0.198765);
  // 結果：売上平均（前月比）：**1.988e-1
printf('%.6sは%sです。<br>', 'ニンザブロウ', 'ハムスター');
  // 結果：ニンはハムスターです。
printf('%2$sは%1$sです。%2s、大好き！<br>', 'ニンザブロウ', 'ハムスター');
  // 結果：ハムスターはニンザブロウです。ニンザブロウ、大好き！
