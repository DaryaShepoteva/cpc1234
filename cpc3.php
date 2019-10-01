<?php
//3.1
$arr = ['a', 'b', 'c'];
echo var_dump($arr);
//3.2
echo $arr[0] . $arr[1] . $arr[2];
//3.3
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0] . "+" . $arr[1] . " " . $arr[2] . "+" . $arr[3] . ", " . $arr[0] . "-" . $arr[3] . " " . $arr[0] ."-" . $arr[3];
//3.4
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;
//3.5
$arr2[] = 1;
$arr2[] = 2;
$arr2[] = 3;
$arr2[] = 4;
$arr2[] = 5;
