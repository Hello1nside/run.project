<?php

namespace app;

use app\controller\PhpMailerTest;

class Route
{
	private $klein;
	private $twig;

	public function __construct($klein, $twig = false)
	{
		$this->klein = $klein;
		$this->twig = $twig;
		$this->pagesRoutes();
		$this->apiRoutes();
	}

	public function pagesRoutes()
	{
		$this->klein->respond('GET', '/', function ($request, $response, $service) {
			echo $this->twig->load('@pages/example.html.twig')->render(['title' => 'Example title | run.project']);
		});

		$this->klein->respond('GET', '/example2', function ($request, $response, $service) {
			echo $this->twig->load('@pages/example2.html.twig')->render(['title' => 'Example2 title | run.project']);
		});

		$this->klein->respond('GET', '/example3', function ($request, $response, $service) {
			echo $this->twig->load('@pages/example3.html.twig')->render(['title' => 'Example3 title | run.project']);
		});
	}

	public function apiRoutes()
	{
		#api routes can be here
	}
}