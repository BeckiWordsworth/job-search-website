<?php
require "../helpers.php";
require basePath("Database.php");
require basePath("Router.php");
// $config = require basePath("config/db.php");

// $db = new Database($config);

// Instantiating the router
$router = new Router();

// Get routes
$routes = require basePath("routes.php");

//Get current URI and HTTP method
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];



$router->route($uri, $method);