<?php

require 'vendor/autoload.php';

$locks = new App\Locks();
$lights = new App\Lights();
$alarm = new App\Alarm();

// We need to make sure that we set the successor for each object
// That is how the chain is created
$locks->succeedWith($lights);
$lights->succeedWith($alarm);

// To set everything in motion all we need to do is to set the check method on the first object
// The home status object represents a request that is then processed by the chain
$locks->check(new App\HomeStatus());
