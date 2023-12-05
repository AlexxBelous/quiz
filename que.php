




<!--

Напиши function с названием calculateSum, которая должна принимать массив чисел и возвращает их сумму. Если массив пуст, то функция возвращает текст - The array is empty.



-->







































<!--******************************************-->
<?php

function calculateSum(array $numbers)
{
    if (empty($numbers)) {
        return "The array is empty";
    }

    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

$numArr = [25, 56, 74, 4];

echo calculateSum($numArr);

