<?php


error_reporting(0);

function connectToDb(){


	
	try{
	
	return new PDO('mysql:host=127.0.0.1;dbname = todos','root','') ;
		
		}catch(PDOException $e){
			
			die("Failed to connect");
	}
}

function fetchAllTasks($pdo){

	$statement = $pdo->prepare('select * from todos.todos');

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}


// function dd($data){
	
// 	echo '<prev>';
	
// 	die(var_dump($data));

// 	echo '</pre>';
// } 