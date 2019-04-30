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
    return view('welcome');
});


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('books', 'BookController');

Route::resource('categories', 'CategorieController');

Route::resource('levels', 'LevelController');

Route::resource('classes', 'ClasseController');

Route::resource('permissions', 'PermissionController');

Route::resource('roles', 'RoleController');

Route::resource('categoryForums', 'CategoryForumController');

Route::resource('sujetForums', 'SujetForumController');

// begin  message forum 
Route::resource('messageForums', 'MessageForumController');
Route::get('/sujetForums/{id}/message/','MessageForumController@principal')->name('messages');
Route::get('/sujet/like/{id}','MessageForumController@like_message')->name('like.forum.message');
Route::get('/sujet/dislike/{id}','MessageForumController@dislike_message')->name('dislike.forum.message');
// end message forum 

// begin  message book
Route::resource('messageBooks', 'MessageBookController');
Route::get('/book/{id}/message/','MessageBookController@principal')->name('bookmessages');
Route::get('/book/like/{id}','MessageBookController@like_message')->name('like.book.message');
Route::get('/book/dislike/{id}','MessageBookController@dislike_message')->name('dislike.book.message');
// end  message book 

Route::resource('typeExamens', 'TypeExamenController');

Route::resource('matieres', 'MatiereController');

Route::resource('examens', 'ExamenController');

// begin  message examen
Route::resource('messageExamens', 'MessageExamenController');
Route::get('/examen/{id}/message/','MessageExamenController@principal')->name('examenmessages');
Route::get('/examen/like/{id}','MessageExamenController@like_message')->name('like.examen.message');
Route::get('/examen/dislike/{id}','MessageExamenController@dislike_message')->name('dislike.examen.message');
// end message examen