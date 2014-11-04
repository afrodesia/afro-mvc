<?php

class App{

	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];
	
	public function __construct(){
		$this->parseUrl();
	}
	
	public function parseUrl(){
		if(isset($GET['url'])){
			echo $_GET['url'];
		}
	}	
}
