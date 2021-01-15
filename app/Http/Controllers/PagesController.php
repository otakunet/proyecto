<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{

    public function __construct(){
      // no me funciono
      $this->middleware('example',['except' => ['home'] ] );

    }

  	public function home(){

      return view('home');
  		//return view('home');

  	}

  	public function contact(){

  		return view('contactos');

  	}

  	public function mensajes(CreateMessageRequest $request){
  		
      $data = $request->all();

      return redirect()->route('contacto');

  	}

    public function saludos($nombre = 'invitado'){

       return view('saludo', compact('nombre'));

    }
}
