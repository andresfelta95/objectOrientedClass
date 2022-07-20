<?php
require_once('account.php');
class Car{
    public $id;
    public $license;
    public $driver;
    protected $passanger;

    public function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }
    
    public function PrintDataCar(){
        echo   "license: $this->license
                Driver: {$this->driver->name}
                Document: {$this->driver->document}
                Number of passengers: $this->passanger";
    }

    public function getPassengers(){
        return $this->passanger;
    }

    public function setPassenger($passenger) {
        if ($passenger <= 4) {
            $this->passanger = $passenger;
        }
        else {
            echo "Please asing no more than 4 passengers";
        }
    }
}
?>