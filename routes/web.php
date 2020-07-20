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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','AdminController@getactu');

Route::get('/detailsmembre{id}','MembresController@details');
Route::get('/detailsblog{id}','BlogController@details');


Route::get('/blog','BlogController@index');
Route::get('/admin/blog','BlogController@indexadmin');
Route::post('/admin/blog','BlogController@create');

Route::get('/about', function () {
    return view('users.pages.about');
});

Route::get('/contact', function () {
    return view('users.pages.contact');
});

Route::get('/membres','MembresController@index');


Route::get('/inscription', function () {
    return view('users.pages.inscription');
});

// Route::get('/admin/home', function () {
//     return view('administration.AdminHome');
// });

Route::get('/admin/home', 'AdminController@index');

Route::get('admin/membres','MembresController@getmembres');
Route::post('admin/membres','MembresController@addmembres');
Route::get('editmembre','MembresController@getEditmembre');
Route::post('updatemembre','MembresController@updatemembre');


Route::get('admin/actu','ActualiteController@getactu');
Route::post('admin/actu','ActualiteController@addactu');
Route::get('editactu','ActualiteController@getEditactu');
Route::post('updateactu','ActualiteController@updateactu');

Route::get('deleteactu','ActualiteController@Deleteactu');

Route::get('login', 'AdminController@connect')->name('connexion');
Route::post('login', 'AdminController@Login')->name('login');
Route::get('logout', 'AdminController@Deconnexion')->name('deconnexion');