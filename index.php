<?php

require 'config.php';
require 'Router.php';



$router = new Router();

var_dump($router);
require 'routes.php';

$router->match();
