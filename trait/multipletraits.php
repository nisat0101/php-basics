<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Multiple Traits Example</title>
</head>
<body>

<?php
trait LoggerTrait {
    public function log($message) {
        echo "[LOG]: $message<br>";
    }
}

trait FormatterTrait {
    public function formatName($name) {
        return strtoupper($name);
    }
}

class User {
    use LoggerTrait, FormatterTrait;

    private $name;

    public function setName($name) {
        // Format name before saving
        $this->name = $this->formatName($name);
        $this->log("Name set to " . $this->name);
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User();
$user->setName("Nisat Hasan");
echo "User's Name: " . $user->getName();
?>

</body>
</html>
