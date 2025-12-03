<?php

require "config/autoload.php";
require "data/homepage-data.php";
require "templates/layout.phtml";
$router = new Router();
$router->handleRequest();
