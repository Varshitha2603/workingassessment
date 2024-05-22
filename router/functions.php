<?php

function deploy($url, $routes){
    $uri = parse_url($url);
    $path = $uri['path'];
    if (!array_key_exists($path, $routes)){
        echo "Page not found";
    }
    else{
        $callback = $routes[$path];
        $callback();
    }
}