<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Trait Example 2</title>
</head>
<body>

<?php
trait NameTrait {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Student {
    use NameTrait;
}

class Teacher {
    use NameTrait;
}

$student = new Student();
$student->setName("Nisat Hasan");

$teacher = new Teacher();
$teacher->setName("Mr. Rahman");

echo "<h2>Student Name: " . $student->getName() . "</h2>";
echo "<h2>Teacher Name: " . $teacher->getName() . "</h2>";
?>

</body>
</html>
