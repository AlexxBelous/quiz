




<!--

Необходимо создать объектно-ориентированный класс для обработки массива студентов, который позволяет получить имена студентов, разделенные запятыми, и возрасты, разделенные тире? Предложите код этого класса и его использование для данной задачи.

Ответ на этот вопрос должен включать в себя объявление и использование класса StudentProcessor.

-->


































<!--******************************************-->

<?php



$students = [
    ["name" => "Alice", "age" => 25, "city" => "New York"],
    ["name" => "Bob", "age" => 22, "city" => "Los Angeles"],
    ["name" => "Charlie", "age" => 28, "city" => "Chicago"],
];

class StudentProcessor {
    private $students;

    public function __construct($students) {
        $this->students = $students;
    }

    public function getNames() {
        $names = array_map(function ($student) {
            return $student["name"];
        }, $this->students);

        return implode(', ', $names);
    }

    public function getAges() {
        $ages = array_map(function ($student) {
            return $student["age"];
        }, $this->students);

        return implode(' - ', $ages);
    }
}

$studentProcessor = new StudentProcessor($students);

$commaName = $studentProcessor->getNames();
$dashAges = $studentProcessor->getAges();

echo "Student Name: " . $commaName . "<br>";
echo "Student Age: " . $dashAges;



?>