<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Country;

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

echo (new Country())->listPhoneNumbers();
