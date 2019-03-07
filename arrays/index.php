<?php

class post{

	public $title;

	public $published;


	public function __construct($title,$published){


		$this->title=$title;

		$this->published=$published;

	}
}

$posts=[

	new post('my first post',true),
	new post('my second post',true),
	new post('my third post',true),
	new post('my forth post',false)

];

//$unpublishedposts=array_filter($posts,function($posts){  //filters thru to return unpublished posts

	//return ! $posts->published;

//$publishedposts=array_filter($posts,function($posts){   //filters thru to return published posts

//	return  $posts->published;


//});
//var_dump($publishedposts);

//$modified = array_map(function($posts){       //maps thru to modify and return all posts as published.

	//$posts->published = true;
	//return $posts;

//}, $posts);

//var_dump($modified);

$title = array_map(function($posts){       //maps or gives list of titles
	return $posts->title;
},$posts);

var_dump($title);



