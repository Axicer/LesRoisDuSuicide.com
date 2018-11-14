<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<div class='error'>
	    <div>404</div>
	    <div>Page innexistante</div>
	    <img class="404" src="<?php File::build_path(array('res','img','404img.png'))?>">
	    <a href="<?php File::build_path(array('index.php'))?>">Page principale</a>
	</div>
</body>
</html>