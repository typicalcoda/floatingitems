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

Route::get('/logout', function(){
	Auth::logout();
	return redirect('/');
});

Route::get('/members', 'MembersController@index')->name('members');

Route::get('/login', function(){
	if(!Auth::check()){
		return view('login');
	}
	else return redirect('/members');
})->name('login');

Route::post('/login', function(){
	if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
		// return "worked";
		return redirect('/members');
	}
	return back();
});

Route::get('/', function () {

	if(Auth::check())
		return redirect('/members');
	else 
		return redirect('login');

});

Route::get('/{vue_capture?}', function ($page) {
	return view('members', compact('page'));
})->where('vue_capture', '[\/\w\.-]*');