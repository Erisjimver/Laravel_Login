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

Route::get('/', function () {

/*
	$user=Auth::user();
	if($user->esAdmin()){
		echo "Eres usuario administrador";
	}
	else{
		echo "Eres estudiante";
	}

*/

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/admin/user/roles', ['middlerware'=>'role', function(){
	return "MIddleware role";
}]);
*/
Route::get('/admin', 'AdministradorController@index');