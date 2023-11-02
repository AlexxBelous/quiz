




<!--Разбор примера работы функции call_user_func_array.

Необходимо написать PHP-код, который создает экземпляр класса Calculator, вызывает методы add и multiply этого класса с использованием call_user_func_array, и выводит результаты операций сложения и умножения для аргументов 3 и 4?"

-->







































<!--******************************************-->

<?php

class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }
}

// Создаем экземпляр класса Calculator
$calculator = new Calculator();

// Массив аргументов для вызова метода
$args = [3, 4];

// Вызываем метод add с использованием call_user_func_array
$result = call_user_func_array([$calculator, 'add'], $args);
echo "Результат сложения: $result\n";

// Вызываем метод multiply с использованием call_user_func_array
$result = call_user_func_array([$calculator, 'multiply'], $args);
echo "Результат умножения: $result\n";


?>