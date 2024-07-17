<?php

$routes = [
    '/' => 'home',
    '/about' => 'about',
    '/services' => 'services',
];

$currentRoute = strtok($_SERVER['REQUEST_URI'], '?');

if (array_key_exists($currentRoute, $routes)) {
    // include the content
    $page = $routes[$currentRoute];

    $filePath = 'content/' . $page . '.php';
    if (file_exists($filePath)) {
        include $filePath;
    } else {
        // Handle the case where the file does not exist
        include 'content/404.php';
    }
} else {
    // include 404
    include_once "content/404.php";
}