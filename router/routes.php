<?php

return [
    '/' => function (){
        require 'home.php';
    },
    '/home' => function (){
        require 'home.php';
    },
    '/blogs' => function (){
        require 'blogs.php';
    },
    '/products' => function (){
        require 'products.php';
    }
];