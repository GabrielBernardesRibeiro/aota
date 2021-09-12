<?php 
	namespace Aota\Controllers;
    use \Aota\Views\Main_view as Main_view;
	
	class Home_controller{
		public function index(){
			
			Main_view::render('home');

		}
	}
?>