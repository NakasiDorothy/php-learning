<?php require('views/partials.head.php');?>

	<!-- <h1> To do List</h1>
	<ul>
	
		<?php foreach ($tasks as $task):?>

			<li>
				<?php if ($task->completed) :?>
					<strike>
				<?php endif; ?>		

				<?php echo $task->descripton;?>

				<?php if ($task->completed) :?>
					</strike>
				<?php endif; ?>	 
			</li>

		<?php endforeach; ?>

	</ul> -->

<!-- <?php foreach ($users as $user):?> 

	<li><?= $user->name; ?></li>

<?php endforeach; ?>
	

<h1>Submit Your Name</h1>

<form method="POST" action="names">
	<input name="name"></input>
	<button type="Submit">Submit</button>
	
</form> -->

<?php require('views/partials.foot.php');?>	