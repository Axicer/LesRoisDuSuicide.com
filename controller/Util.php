<?php
	class Util{
		static function getFromGETorPOST($name){
			if(array_key_exists($name, $_POST)){
				return $_POST[$name];	
			}else if(array_key_exists($name, $_GET)){
				return $_GET[$name];
			}else{
				return NULL;
			}
		}
	}
?>