<?php 

use App\Core\App;
use App\Core\Connection;
use App\Core\QueryBuilder;

App::bind('config',require'config.php');

App::bind('database',new QueryBuilder(

	Connection::make(App::get('config')['database'])

));

function view($name,$data = []){

	extract($data);
	require "views/{$name}.view.php";
}

function redirect($path){

	header("Location: /{$path}");
}
