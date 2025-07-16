<?php
class Man {
    public $name;
    public $age;
    public $address;
    public $position;
    public $email;

    public function info($name){
        $this->name = $name; 
        return "Name is: " . $this->name;  
    }
}

$nisat = new Man();               
echo $nisat->info("Nisat");
?>
<?php
class Maan {
    public $name;
    public $age;
    public $address;
    public $position;
    public $email;

    // Constructor: সব ডাটা একসাথে সেট করবে
    public function __construct($name, $age, $address, $position, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->position = $position;
        $this->email = $email;
    }

    // সব তথ্য দেখানোর method
    public function info() {
        return "Name: " . $this->name . "<br>" .
               "Age: " . $this->age . "<br>" .
               "Address: " . $this->address . "<br>" .
               "Position: " . $this->position . "<br>" .
               "Email: " . $this->email;
    }
}

$nisaat = new Maan(
    "Nisat Hasan",
    21,
    "Dhaka, Bangladesh",
    "Student",
    "nisat@example.com"
);

echo $nisaat->info();
?>
