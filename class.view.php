<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">
		header{
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}

	</style>
</head>
<body>
	<ul>
		
		<?php foreach ($tasks as $task):?>

			<li>
				<?php if ($task->completed) :?>
					<strike>
				<?php endif; ?>		

				<?=$task->description;?>

				<?php if ($task->completed) :?>
					</strike>
				<?php endif; ?>	 
			</li>

		<?php endforeach; ?>

	</ul>


</body>
</html>