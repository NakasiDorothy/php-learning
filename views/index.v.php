<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">
		header{
			background: red;
			padding: 2em;
			text-align: center;
		}

	</style>
</head>
<body>

	<h1>Task for the day</h1>

	<ul>
	
		<?php foreach($task as $key=>$feature):?>
			<li><strong><?= ucwords($key); ?></strong> <?=ucwords($feature); ?></li>
		<?php endforeach; ?>
	</ul>


</body>
</html>




