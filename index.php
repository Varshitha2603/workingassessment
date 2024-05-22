<?php

include "router/functions.php";
$routes = include "router/routes.php";
deploy($_SERVER['REQUEST_URI'], $routes);