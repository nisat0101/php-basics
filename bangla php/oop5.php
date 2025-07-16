<?php
class TechVillage {
    const TV_MESSAGE = "Thanks";

    public function tv() {
        return self::TV_MESSAGE;
    }
}

// Accessing the constant directly using class name
echo TechVillage::TV_MESSAGE;
echo "<br>";

// Creating an object and accessing via method
$tv = new TechVillage();
echo $tv->tv();
?>
