<?php

$vendorDir = dirname(dirname(__FILE__));
require($vendorDir . '/vendor/autoload.php');

//Error Handling
ini_set('display_errors', 'On');

use KoleImports\DropshipApi\Service\ServiceBuilder;

$serviceBuilder = new ServiceBuilder('ACCOUNT ID', 'API KEY');

$orderService = $serviceBuilder->getOrderService();

$response = $orderService->getOrders();

//List Of Orders
var_dump($response);
