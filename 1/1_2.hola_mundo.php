<?php 

// Variable (Ya veremos)
$nombre = 'mundo';

?>

<!-- Parte II -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hola <?=$nombre;?></title>
</head>
<body>
	<h1><?php print 'Primera página';?></h1>
	<h3><?php echo 'Hola ' . $nombre ?></h3>
</body>
</html>