<?php

use Foxtech\Kernel\Route;

$route = new Route();

$route->add('/', 'MainController@index');
$route->add('calculate', 'CalculateController@index');
