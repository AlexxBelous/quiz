




<!--

Есть массив строк, необходимо добавить префикс "Hello, " к каждой строке с помощью array_map.

-->


































<!--******************************************-->

<?php

// Исходный массив строк
$names = ["Alice", "Bob", "Charlie"];

// Определяем функцию, которую хотим применить
function addGreeting($name) {
    return "Hello, " . $name;
}

// Применяем функцию addGreeting() к каждой строке массива с помощью array_map
$greetedNames = array_map('addGreeting', $names);

echo implode("<br>", $greetedNames);
// $greetedNames будет содержать ["Hello, Alice", "Hello, Bob", "Hello, Charlie"]


?>