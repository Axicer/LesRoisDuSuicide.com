<?php
	class Util{
		static function getFromGETorPOST($name){
			return isset($_POST['page']) ? $_POST["page"] :
											isset($_GET['page']) ? isset($_GET['page']) :
																	NULL;
		}
	}
?>