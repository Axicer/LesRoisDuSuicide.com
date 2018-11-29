<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="res/imgs/favicon.ico" />
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>

<?php
	require_once "lib/File.php";
	require File::build_path(array("controller", "router.php"));
?>
</html>