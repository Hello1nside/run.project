<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri !== '/') {
    $uri = explode('/', $uri)[1];
}
define('URI', $uri);
define('ROOT', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';

\core\App::run();