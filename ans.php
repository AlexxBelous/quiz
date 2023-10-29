<?php



$names = ["Alice", "Bob", "Charlie"];

// Исходный массив строк
$names = ["Alice", "Bob", "Charlie"];

// Определяем функцию, которую хотим применить
function addGreeting($name) {
    return "Hello, " . $name;
}

// Применяем функцию addGreeting() к каждой строке массива с помощью array_map
$greetedNames = array_map('addGreeting', $names);

// $greetedNames будет содержать ["Hello, Alice", "Hello, Bob", "Hello, Charlie"]



echo implode("<", $greetedNames);

