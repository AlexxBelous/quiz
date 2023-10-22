




<!--Разбор примера работы функции call_user_func_array. -->
<!--

1) Напишите function greet, которая будет принимать два аргумента: имя и приветствие. Затем в переменную $functionName задаем имя функции, а в переменную $arguments задаем аргументы в виде массива.
Используем call_user_func_array для вызова функции с аргументами.

-->


































<!--******************************************-->

<?php

// Создаем обычную функцию, которую мы хотим вызвать
function greet($name, $greeting) {
    echo "$greeting, $name!";
}

// Задаем имя функции и аргументы в виде массива
$functionName = 'greet';
$arguments = ['John', 'Hello'];

// Используем call_user_func_array для вызова функции с аргументами
$outPut = call_user_func_array($functionName, $arguments);
echo $outPut;

?>