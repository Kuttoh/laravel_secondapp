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
//
Route::get('/', 'PagesController@home');
//Route::get('/contact', 'PagesController@contact');
//Route::get('/about', 'PagesController@about');
//Route::get('/media', 'PagesController@media');
//Route::get('/foundation', 'PagesController@foundation');
//
///*
// * Projects Routing
// */
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create'); ##display create form
Route::get('/projects/{project}/details', 'ProjectsController@details'); ##display the project
Route::post('/projects/store', 'ProjectsController@store'); ##create project
Route::get('/projects/{project}/edit', 'ProjectsController@edit'); ##display edit form
Route::post('/projects/{project}/update', 'ProjectsController@update'); ##update the project
Route::get('/projects/{id}/delete', 'ProjectsController@destroy'); ##delete the project

//Route::resource('projects', 'ProjectsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
