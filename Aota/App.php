<?php
	namespace Aota;

	class App
	{
		private $controller;

		private function set_app(){
			$load_name = 'Aota\Controllers\\';
			$url = explode('/', @$_GET['url']);
			$file_path = __DIR__.'/Controllers/';

			if ($url[0] == '') {
				$load_name.='Home';
				$file_path.='Home';
			} else {
				$load_name.=ucfirst(strtolower($url[0]));
				$file_path.=ucfirst(strtolower($url[0]));;
			}

			$load_name.='_controller';
			$file_path.='_controller';

			if (file_exists($file_path.'.php')) {
				$this->controller = new $load_name();
			} else {
				include('Views/error_pages/404.php');
				die();
			}
			
		}

		public function run(){
			$this->set_app();
			$this->controller->index();
		}
	}
?>