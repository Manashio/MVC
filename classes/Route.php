<?php

	class Route {
		public static $validRoute = array();
		public static function set($route, $function){
			$validRoutes[] = $route;
			if($_GET['url'] == $route){
				$function->__invoke(); 
			}	
		}
	}


?>