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

Auth::routes();

Route::get('/', function () {
    return view('index',['title'=>'webdevelopersl.com']);
})->name('welcome');

//Route::get('second', function () {
//    return view('second',['title'=>'Second | Testing']);
//})->name('second');
//
//Route::get('get_content', 'ContentRenderController@index')->name('getContent');

Route::get('projects', 'ProjectsController@index')->name('projects');

Route::get('about', 'BioDateController@index')->name('about');

Route::get('skills', 'SkillsController@index')->name('skills');

Route::get('contact', 'ContactController@index')->name('contact');

Route::post('contact','ContactController@contact')->name('contact');








