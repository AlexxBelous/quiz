




<!--

Напишите PHP-код, который принимает массив элементов и фильтрует его, оставляя только числовые значения. В результате выполнения кода должен быть получен новый массив, содержащий только цифры. "

-->


































<!--******************************************-->

<?php

$elements = ["apple", "123", "banana", "456", "cherry"];

$filteredNumber = array_filter($elements, function ($element) {
    return is_numeric($element);
});

$result = implode(', ', $filteredNumber);
echo $result;

?>