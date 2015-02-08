<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('addStudent', 'HomeController@add_student');
Route::get('showStudent', 'HomeController@show_student');
Route::get('editStudent', 'HomeController@edit_student');
Route::get('deleteStudent', 'HomeController@delete_student');
Route::get('editSpecificStudent', 'HomeController@edit_specific_student');
Route::get('deleteSpecificStudent', 'HomeController@delete_specific_student');
Route::get('blockSpecificStudent', 'HomeController@block_specific_student');
Route::get('test', function()
{
    return 'This is practice test!';
});
Route::get('users', function()
{
    return View::make('users');
});
