<?php


	class Route {

		public static $validRoute = array();
		
		public static function set($route, $function){

			$validRoutes[] = $route;

			//print_r($validRoutes);
			if($_GET['url'] == $route){
			
				$function->__invoke(); 
			}	
		}
	}