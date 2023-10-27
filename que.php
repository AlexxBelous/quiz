




<!--

Напишите код, который будет объединять имен студентов и их возрастов из
ассоциативных массивов в строку с использованием ", " после каждого имени и значения " - " между значениям возраста студентов.

-->


































<!--******************************************-->

<?php



$students = [
    ["name" => "Alice", "age" => 25, "city" => "New York"],
    ["name" => "Bob", "age" => 22, "city" => "Los Angeles"],
    ["name" => "Charlie", "age" => 28, "city" => "Chicago"],
];

// Concatenate student names with commas
$names = [];
foreach ($students as $student) {
    $names[] = $student["name"];
}
$commaName = implode(', ', $names);

// Concatenate student ages with dashes
$ages = [];
foreach ($students as $student) {
    $ages[] = $student["age"];
}
$dashAges = implode(' - ', $ages);

echo "Student Name: " . $commaName . "<br>";
echo "Student Age: " . $dashAges;



?>