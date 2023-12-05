




<!--

Напиши function, которая должна  принимать массив $items и переменное количество параметров $params. Она должна удалять из массива $items все значения, которые соответствуют значениям, переданным в $params и выводить элементы, которые остались на экран.

-->







































<!--*******************92***********************-->
<?php

function filterOut(array $items, ...$params): array
{

    $filteredItems = array_filter($items, fn($item) => !in_array($item, $params));

    return array_values($filteredItems);
}

$arr = [2, 1, 2, 3, 45, 3, 2];



echo implode(', ', filterOut($arr, 2));

