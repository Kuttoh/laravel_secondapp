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
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/media', 'PagesController@media');
Route::get('/foundation', 'PagesController@foundation');
//
///*
// * Projects Routing
// */
//Route::get('/projects', 'PagesController@projects');
//Route::get('/projects/create', 'PagesController@create'); ##display create form
//Route::get('/projects/{project}', 'PagesController@show'); ##display the project
//Route::post('/projects', 'PagesController@store'); ##create project
//Route::get('/projects/{project}/edit', 'PagesController@edit'); ##display edit form
//Route::patch('/projects/{project}', 'PagesController@update'); ##update the project
//Route::delete('/projects/{project}', 'PagesController@destroy'); ##delete the project

Route::resource('projects', 'ProjectController');

