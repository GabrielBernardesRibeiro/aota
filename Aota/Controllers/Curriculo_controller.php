<?php 
	namespace Aota\Controllers;
    use \Aota\Views\Main_view as Main_view;
	
	class Curriculo_controller{
		public function index(){
			
            Main_view::render('curriculo');
			
		}
	}
?>