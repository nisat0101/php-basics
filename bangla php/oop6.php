<?php
// Abstract class
abstract class TechnologyVillage {
    public $tutorial;

    // Proper constructor with two underscores
    public function __construct($name) {
        $this->tutorial = $name;
    }

    // Abstract method must be implemented by child
    abstract public function message();
}

// Child class
class Phptute extends TechnologyVillage {
    public function message() {
        echo "Thanks for watching my " . $this->tutorial . " video!";
    }
}

// Create object and pass parameter to constructor
$php = new Phptute("PHP");

// Call the method
$php->message();
?>
