<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home'] );

Route::get('contactame', ['as' => 'contacto', 'uses' => 'PagesController@contact'] );

Route::post('contacto','PagesController@mensajes');

Route::get('saludos/{nombre?} ', ['as' => 'saludos', function ($nombre = 'invitado') {

    return view('saludo', compact('nombre'));

}]);

Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
