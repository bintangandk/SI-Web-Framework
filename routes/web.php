<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/menyapa', function () {
    return 'Halo bintang keren';
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/product', 'PagesController@products')->name('product.products');
Route::get('/maps', 'PagesController@address')->name('maps.address');
Route::get('/sosmed', 'PagesController@socials')->name('sosmed.socials');

//Route get ManagemenUserController
Route::resource('user', 'ManagementUserController');



});

