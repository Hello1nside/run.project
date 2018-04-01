<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 29.03.2018
 * Time: 11:40
 */

namespace core;

use Klein\Klein;
use app\Route;

class App
{
    public static function run() {
        $klein = new Klein();

        new Route($klein);

        $klein->onHttpError(function ($code, $router) {
            switch ($code) {
                case 404:
                    $router->response()->body(
                        'Y U so lost?!'
                    );
                    break;
                case 405:
                    $router->response()->body(
                        'You can\'t do that!'
                    );
                    break;
                default:
                    $router->response()->body(
                        'Oh no, a bad error happened that caused a '. $code
                    );
            }
        });;
        $klein->dispatch();
	}
}