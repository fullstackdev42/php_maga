<?php
class MyClass {
    private $property;

    public function __get($name) {
        echo "Getting $name\n";
        return $this->$name;
    }

    public function __set($name, $value) {
        echo "Setting $name to $value\n";
        $this->$name = $value;
    }
}

$obj = new MyClass();
$obj->property = 'value';  // Output: Setting property to value
echo $obj->property;       // Output: Getting property
