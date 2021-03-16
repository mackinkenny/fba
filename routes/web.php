<?php

use Illuminate\Support\Facades\Route;

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
})->name('/');

Route::get('/experts', 'ExpertsController@index')->name('experts');
Route::get('/expert', 'ExpertsController@show')->name('expert');

Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/project', 'ProjectController@show')->name('project');

Route::get('/articles', 'NewsController@index')->name('articles');
Route::get('/article', 'NewsController@show')->name('article');

Route::get('/about', 'ProjectController@about')->name('about');
Route::get('/poster', 'MainController@index')->name('poster');


Route::get('/contacts', function(){
    return view('contact');
})->name('contacts');

Route::post('/send_report', 'MainController@send')->name('send_report');
Route::post('/add_email', 'MainController@addEmail')->name('add_email');

Route::get('/upload_excel_emails', 'MainController@upload_excel_emails')->name('upload_excel_emails')->middleware('auth');

Route::get('/posters', function (){
    return view('posters');
})->name('posters')->middleware('auth');
Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();
});
