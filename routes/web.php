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
$i = 1; 
while ($i <= 6):
print "<h$i>Hi hello world</h$i><br>";
$i++;
endwhile;
});

//enter path /home
Route::get('/home', function(){
	return "laravel 5.4  nakaaaa ";
}); 
//cell by method name :form
Route::get('form','Auth\LoginController@form');
Route::get('movie','MovieController@index');
Route::get('movieview',"MovieController@view"); 
Route::get('song','music\SongController@index');
Route::get('songplay','music\SongController@play');
Route::get('band','music\SongController@band');

echo "testtt";



//Required by parameters : id
Route::get('blog/{id}', function($id) {
	return "welcome to blog id : ". $id;
});

//optional parameters : id?=null
Route::get('profile/{id?}', function($id=null) {
	return "welcome to profile id : ". $id;
});

//Required expression only number min 1++ charector
Route::get('book/{id}', function($id) {
	return "welcome to book id : ". $id;
})->where('id','[0-9]+');

//Required expression only word min 1++ charector)
Route::get('book/{name}', function($name) {
	return "welcome to book name : ". $name;
})->where('name','[A-Z a-z]+');

//post change @form to @save or @add etc.
Route::post('form', 'Auth\LoginController@save');

//mathch
Route::match(['get','post'],'ployget',function(){
	if(Requtes::isMethod('get')){
		return'this is get method';
	}
	if(Requtes::isMethod('post')){
		return 'this is post method';
	}
});

//any
Route::any('testany','Auth/LoginController@testany');