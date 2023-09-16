<?php

require 'config.php';
require 'Router.php';



$router = new Router();


require 'routes.php';

$router->match();
