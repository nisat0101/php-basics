<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the parent class
class Animal {
    public function speak() {
        echo "The animal makes a sound.";
    }
}

// Define the child class
class Dog extends Animal {
    public function speak() {
        // Call the parent class's speak method
        parent::speak();

        // Add child class specific behavior
        echo " The dog barks.";
    }
}

// Create an instance of the child class
$dog = new Dog();

// Call the method
$dog->speak();
?>
</body>
</html>