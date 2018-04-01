<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 29.03.2018
 * Time: 11:41
 */

namespace app;

use app\controller\IndexController;

class Route
{
	private $klein;
	public $title = 'Simple title';

	public function __construct($klein)
	{
		$this->klein = $klein;
		$this->setPageTitle();
		$this->indexRoutes();
		$this->apiRoutes();
	}

	public function setPageTitle()
    {
        $this->title = (URI === '/') ? 'Main page' : ucfirst(URI);
    }

	public function indexRoutes()
	{
		$this->klein->respond('*', function ($request, $response, $service) {
			$service->render('header.phtml', ['title' => $this->title]);
		});
		$this->klein->respond('GET', '/', function ($request, $response, $service) {
			$service->render('index.phtml', ['title' => 'Hello with love!']);
		});
		$this->klein->respond('*', function ($request, $response, $service) {
			$service->render('footer.phtml');
		});
	}

	public function apiRoutes()
	{
		$this->klein->respond('GET', '/get-task', function ($request, $response, $service) {
			IndexController::getTasks(); //example
		});
	}
}