<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function __construct(Request $request){

  		$this->request = $request;

  	}

  	public function home(){

  		return view('home');

  	}

  	public function contact(){

  		return view('contactos');

  	}

  	public function mensajes(){

  		return "procesando mensaje...";

  	}
}
