<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trait</title>
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

$s = new Student();
$s->setName("Nisat Hasan");
echo "Student Name: " . $s->getName();
?>

</body>
</html>
