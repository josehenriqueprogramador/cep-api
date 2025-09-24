<?php
require_once 'vendor/autoload.php';
require_once 'app/controllers/CepController.php';

$controller = new App\controllers\CepController();
$controller->handleRequest();
