<?php 



namespace App\controllers;

class PagesController{

	public function home()

	{
		return view('class');


	}

	public function about()
	
	{	
		$company = 'Mobis';

		return view('About',['company' => $company]);

	}

	public function contact()

	{

		 return view('Contact');
	}

	public function culture()

	{

		return view('about-culture');
	}

} 