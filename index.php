<?php
require_once __DIR__ . '/vendor/autoload.php';

use Acme\BombSpecialist;
use Acme\Spanner;
use Acme\Screwdriver;
use Acme\Pliers;
use Acme\Flashlight;
use Acme\WireCutters;
use Acme\Toolbox;

$bombSpec = new BombSpecialist(new Spanner(),new Screwdriver(),new Pliers, new Flashlight(), new WireCutters(), new Toolbox());

$bombSpec->checkIfReady();
$bombSpec->getToWork();