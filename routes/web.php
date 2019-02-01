<?php
use App\book;
use Illuminate\Support\Facades\Input;
 
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laravel/books','booksController@index');
Route::get('/laravel/entry','booksController@entry')->middleware('auth');
Route::post('/laravel/books','booksController@store');
Route::any('/laravel/search','SearchController@search');
Route::resource('/laravel/books', 'booksController')->middleware('auth');
Route::get('/laravel/entry', 'booksController@entry')->middleware('auth');

Route::get('/laravel/edit','booksController@edit');
Route::get('/laravel/destroy','booksController@destroy');
Route::get('/laravel/borrow',function(){
	return view('laravel.User.borrowForm');
});
    


