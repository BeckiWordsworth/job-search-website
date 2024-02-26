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
$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

//Route the request
$router->route($uri, $method);