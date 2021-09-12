<?php
	namespace Aota\Views;

	class Main_view{
		public static function render($file_name, $message = ''){
			include($file_name.'.php');
		}
	}
?>