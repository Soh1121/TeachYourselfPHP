<?php
$add = bcadd(0.1, 0.7, 1);
$mul = bcmul($add, 10, 1);
print floor($mul);

// うまく動かない場合は
// $ docker-php-ext-install bcmath
// を実行する
