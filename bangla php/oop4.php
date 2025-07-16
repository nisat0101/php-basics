<?php
class Maan {
    public $name;
    public $age;
    public $address;
    public $position;
    public $email;

    // Constructor to set all properties
    public function __construct($name, $age, $address, $position, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->position = $position;
        $this->email = $email;
    }

    // Method to return all info as a string
    public function info() {
        return "Name: " . $this->name . "<br>" .
               "Age: " . $this->age . "<br>" .
               "Address: " . $this->address . "<br>" .
               "Position: " . $this->position . "<br>" .
               "Email: " . $this->email . "<br>";
    }
}

class RakibsInfo extends Maan {
    // Call parent constructor to initialize properties
    public function __construct($name, $age, $address, $position, $email) {
        parent::__construct($name, $age, $address, $position, $email);
    }

    // Method returning a message
    public function message(): string {
        return "Thanks everyone";
    }
}

// Create object of Maan
$nisat = new Maan(
    "Nisat Hasan",
    21,
    "Dhaka, Bangladesh",
    "Student",
    "nisat@example.com"
);

// Create object of RakibsInfo
$rakib = new RakibsInfo(
    "Rakib Hasan",
    28,
    "Dhaka, Bangladesh",
    "Student",
    "rakib@example.com"
);

// Output info and message
echo $nisat->info();
echo "<hr>";
echo $rakib->info();
echo $rakib->message();
?>
