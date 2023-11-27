




<!--

Используя цикл for перебери массив и получить все ключи (марки автомобилей). И выведи результат на экран.



-->







































<!--******************************************-->

<?php


$cars = array(
    "Toyota" => array(
        "color" => "Blue",
        "year" => 2022
    ),
    "Honda" => array(
        "color" => "Red",
        "year" => 2021
    ),
    "Ford" => array(
        "color" => "Green",
        "year" => 2020
    )
);


$brands = array_keys($cars);

$length = count($brands);

for ($i = 0; $i < $length; $i++) {
    $brand = $brands[$i];
    echo "Brand: $brand" . "<br>";
}

?>