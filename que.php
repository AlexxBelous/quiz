




<!--

У вас есть массив $numbers, содержащий некоторые целые числа. Ваша задача - использовать цикл for, чтобы создать новый массив $newNumbers, в котором каждое число из $numbers будет возведено в квадрат. Затем выведите оба массива.



-->







































<!--******************************************-->

<?php


$numbers = array(2, 4, 6, 8, 10);


$newNumbers = array();
$length = count($numbers);

for ($i = 0; $i < $length; $i++) {
    $squaredNumbers[] = $numbers[$i] ** 2;
}


echo implode(', ', $squaredNumbers) . '<br>';

echo implode(', ', $numbers);

?>