<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected</title>
</head>
<body>
<?php
class Person {
    protected $name; // protected property

    protected function setName($name) {
        $this->name = $name;
    }

    protected function getName() {
        return $this->name;
    }
}

class Student extends Person {
    public function assignName($name) {
        $this->setName($name); // allowed, because it's within a subclass
    }

    public function showName() {
        return $this->getName(); // allowed
    }
}

$student = new Student();
$student->assignName("Nisat");
echo $student->showName(); // Output: Nisat

//  Not allowed - will cause error
// $student->setName("Hasan"); 
// echo $student->name;
?>

</body>
</html>