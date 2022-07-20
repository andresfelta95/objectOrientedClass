<?php

require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('uberBlack.php');
require_once('uberVan.php');
require_once('account.php');
require_once('user.php');
require_once('driver.php');

$uberX = new UberX("AW456", new Driver("Andres Herrera", "AMS123",  "andrescamelo@yahoo.ca"),"Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

$driver = new Driver("Aniceto Molina", "ANIM162", "animoli@gmoli.com");
$driver->PrintDataAccount();

$uberVan = new UberVan("OJL395", new Driver("Raúl Ramírez", "AND456", "no email"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
?>