<?php
require_once('car.php');
class UberVan extends Car{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial) {
        parent::__construct($license, $driver);
        $this->license = $license;
        $this->driver = $driver;
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassenger($passenger) {
    
        if ($passenger == 6) {
            $this->passanger = $passenger;
        }
        else {
            echo "Please asing 6 passenger";
        }
    
    }
}
?>