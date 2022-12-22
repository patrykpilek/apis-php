<?php

require dirname(__DIR__) . "/vendor/autoload.php";

set_error_handler("ErrorHandler::handleError");
set_exception_handler("ErrorHandler::handleException");

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin", "*");
header("Access-Control-Allow-Methods", "DELETE, POST, GET, OPTIONS");
header("Access-Control-Allow-Headers", "Content-Type, Authorization, X-Requested-With");