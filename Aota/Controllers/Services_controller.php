<?php 
	namespace Aota\Controllers;
    use \Aota\Views\Main_view as Main_view;
	
	class Services_controller{
		public function index(){
			
            Main_view::render('services');
			
		}
	}
?>