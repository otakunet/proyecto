<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home'] );

Route::get('contactame', ['as' => 'contacto', 'uses' => 'PagesController@contact'] );

Route::post('contacto','PagesController@mensajes');

Route::get('saludos/{nombre?} ', ['as' => 'saludos', 'uses' => 'PagesController@saludos']);



Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);

Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);
