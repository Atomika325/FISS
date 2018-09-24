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
Route::get('/admin/home', 'PagesController@adminhome');
Route::get('/admin/about', 'PagesController@aabout');
Route::get('/admin/faculty-list', 'PagesController@facultylist');
Route::get('/admin/add', 'PagesController@crud');
Route::get('/admin/add','RoomsController@index');
Route::get('/professor/profile', 'ProfessorProfileController@index');
Route::get('/admin/add/room', 'PagesController@crudroom');
Route::get('/admin/add/course', 'PagesController@crudcourse');
Route::get('/admin/add/subject', 'PagesController@crudsubj');
Route::get('/admin/add/professor', 'PagesController@crudprof');
Route::get('/admin/prof-sched', 'PagesController@pschedule');
Route::get('/admin/stud-sched', 'PagesController@sschedule');
Route::get('/admin', 'PagesController@adminhome');
Route::get('/professor', 'PagesController@profhome');
Route::get('/professor/home', 'PagesController@profhome');
Route::get('/professor/profile', 'PagesController@profprofile');
Route::get('/professor/schedule', 'PagesController@yoursched');
Route::get('/professor/about', 'PagesController@pabout');


Auth::routes();
Route::get('/professor/dashboard', 'PDashboardController@index')->name('professor');


Route::resource('room', 'RoomsController');
Route::resource('course', 'CoursesController');
Route::resource('subject', 'SubjectsController');
Route::resource('professor', 'ProfessorsController');
Route::resource('profile', 'ProfessorProfilesController');
Route::resource('availability', 'AvailabilityController');


Route::get('/profs/{id}', function($id) {
    return 'This is Professor '.$id;
});
?>
