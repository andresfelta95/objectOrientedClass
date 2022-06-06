<?php
require_once('account.php');
class Car{
    public $id = integer;
    public $license   = string;
    public $driver    = string;
    public $passanger = string;

    public function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }
    
    public function PrintDataCar(){
        echo "license: $this->license, conductor: {$this->driver->name}, document: {$this->driver->document}";
    }
}
?>