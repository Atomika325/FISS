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

Route::get('/', 'PagesController@index');
Route::get('/admin', 'PagesController@adminhome');
Route::get('/admin/about', 'PagesController@aabout');
Route::get('/admin/faculty-list', 'PagesController@facultylist');
Route::get('/admin/add', 'PagesController@crud');
Route::get('/admin/prof-sched', 'PagesController@pschedule');
Route::get('/admin/stud-sched', 'PagesController@sschedule');
Route::get('/admin', 'PagesController@adminhome');
Route::get('/professor', 'PagesController@profhome');
Route::get('/professor/profile', 'PagesController@profprofile');
Route::get('/professor/schedule', 'PagesController@yoursched');
Route::get('/professor/about', 'PagesController@pabout');

Route::get('/profs/{id}', function($id) {
    return 'This is Professor '.$id;
});
?>
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
