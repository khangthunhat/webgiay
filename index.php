<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGA Sneaker</title>
	<link rel="icon" href="./public/template/img/icon_1.png" type="img/x-icon">
</head>
<body>
    <h2>
		<?php
			spl_autoload_register(function($class){
				include_once 'system/libs/'.$class.'.php';
			});
			include_once 'app/config/config.php';

			$main = new Main();

		?>
	</h2>
</body>
</html>