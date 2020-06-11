<?php namespace App\Controllers;

class HolaMundo extends BaseController
{
	public function index()
	{
		$datos['dato_1']= 'dato 1';
		return view('hola_mundo',$datos);
	}

	//--------------------------------------------------------------------

}
