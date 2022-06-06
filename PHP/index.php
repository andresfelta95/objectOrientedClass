<?php

require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('uberBlack.php');
require_once('uberVan.php');
require_once('account.php');

$uberX = new UberX("AW456", new Account("Andres Herrera", "AMS123"),"Chevrolet", "Spark");
$uberX->printDataCar();
?>