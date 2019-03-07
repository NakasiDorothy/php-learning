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

	<h1>Task for the day</h1>

	<ul>
		<li>
			<strong>Name:</strong> <?= $task['title']; ?>
		</li>

		<li>
			<strong>Date:</strong> <?= $task['due']; ?>
		</li>

		<li>
			<strong>Person_Responsible:</strong> <?= $task['assigned_to']; ?>
		</li>

		<li>
			<strong>Status:</strong> 
			<?php 
			if($task['completed']){
				echo 'complete';
			}
			else{
				echo 'Incomplete';
			}; 
			?>
		</li>
	
		
	</ul>


</body>
</html>