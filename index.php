<?php

//echo $greeting = 'Hello World';
//require 'index.view.php';

//$names = [

//'Dorothy',
//'Conrad',
//'Magmry'

//];

//$task = [

//'title' => 'system_development',
//'due' => 'A week',
//'assigned_to'=> 'Dorothy',
//'completed'=> 'False'
//];

//$task['Challenges'] = 'Moderate';

//unset($task['Due']);
//require 'boolean.php';
//foreach ($names as $name) {
//	echo $name . ',';
//}


//if (club_pass(21)){
//	echo 'Access Granted';
//}
//else{
//	echo 'Access Denied';
//}


//class Task{
// 	public $description;
// 	public $completed = false;
// 	public function __construct($description)
// 	{
// 		$this->description = $description;

// 	}
// 	public function complete(){

// 		$this-> completed = true;
// 	}

// 	public function isComplete(){

// 		return $this->completed;

// 	}
// }
// $tasks = [
// 	new Task('Do homework'),
// 	new Task('Go to school')

// ];

// $tasks[0]->complete();
// require 'bootstrap.php';
//$database = require 'core/bootstrap.php';1
 // var_dump($query);

// require 'Task.php';
//require router::load('routes.php')->direct(Request::uri());


//$router = new router;
//$routes = require 'routes.php';

//$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');

//var_dump($uri);

//require_once $router->direct($uri);

require 'vendor/autoload.php';
require 'core/bootstrap.php';


use App\Core\Router;
use App\Core\Request;

Router::load('routes.php')->direct(Request::uri(), Request::method());





// echo "testing testing";




