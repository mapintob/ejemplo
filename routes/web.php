<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);

Route::get('/mens', ['as' => 'mens', 'uses' => 'PagesController@mens']);

Route::get('/womens', ['as' => 'womens', 'uses' => 'PagesController@womens']);

//Route::post('/mensajes',['as' => 'womens', 'uses' => 'PagesController@mensajes']);

Route::post('mensajes',function(){
	// enviar un correo
	$data = request()->all();
	Mail::send("emails.mensaje", $data, function($message) use ($data){
		$message->from($data['Email'], $data['Name'])
		->to('jperez.ejemplo1@gmail.com','Juan')
		->subject($data['Subject']);
	});

	// responder al usuario
	return back()->with('flash',$data['Name']. ', Tu mensaje ha sido recibido');
})->name('mensajes');
