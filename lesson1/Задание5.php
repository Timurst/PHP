<?php

/* 5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо,
 чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя.*/

$a = rand(10,99); // 1;
$b = rand(10,99); // 2;

echo "Исходные значения: a = $a, b = $b";

$a = $a + $b; // (3)
$b = $a - $b; // (3 - 2) = 1
$a = $a - $b; // (3 - 1) = 2

echo "<br>Меняем местами: a = $a, b = $b";