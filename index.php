<?php

require 'class/Task.php';

require 'core/bootstrap.php';

$router = Router::load('routes.php');

require $router->direct(trim($_SERVER['REQUEST_URI'], '/'));

