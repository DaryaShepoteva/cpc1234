<?php
//4.1
$arr = ['a'=>11, 'b'=>20, 'c'=>30];
echo $arr['c'];
//4.2
$arr = ['q3'=>12, 'r3'=>23, 'f3'=>34];
$result = 0;
foreach ($arr as $u => $o){
    $result += $o;
}
echo $result;
//4.3
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo "З/п Пети: " . $arr['Петя'] . " | З/п Коли: " . $arr['Коля'];
//4.4
$arr = ['1'=>'Январь','2'=>'Февраль','3'=>'Март',
    '4'=>'Апрель','5'=>'Май','6'=>'Июнь',
    '7'=>'Июль','8'=>'Август','9'=>'Сентябрь',
    '10'=>'Октябрь','11'=>'Ноябрь','12'=>'Декабрь'];
echo $arr ['1']." ".['12'];
//4.5
$arr = ['1'=>'Понедельник','2'=>'Вторник','3'=>'Среда',
    '4'=>'Четверг','5'=>'Пятница','6'=>'Суббота','7'=>'Воскресенье',];
$day = 3;
echo $arr[$day];
