<?php
// docker.for.mac.localhost
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

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'MainController@index');
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');
Route::post('/loginpost', 'LoginController@loginpost');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/index', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/profile', 'ProfileController@index');
    Route::get('/profile/editprofile', 'ProfileController@profiles');
    Route::get('/content/write', 'ContentController@index');
    Route::post('/content/write', 'ContentController@store');
    // Route::get('/profile/show', 'ProfileController@show');
    Route::put('/profile/editprofile', 'ProfileController@updateprofile');
});
