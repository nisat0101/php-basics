<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>public access</title>
</head>
<body>
<?php
class Person {
    public $name; // public property

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$person = new Person();
$person->setName("Nisat");
echo $person->getName(); // Output: Nisat

// Accessing directly
$person->name = "Hasan";
echo $person->name; // Output: Hasan
?>

</body>
</html>