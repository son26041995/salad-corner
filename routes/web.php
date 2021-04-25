<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::post('/login', 'HomeController@index')->name('login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/post/create', 'PostController@create')->name('post-create');
Route::get('/post/{id}', 'PostController@detail')->name('post-detail');
Route::get('/post/member_submit_order/{id}', 'PostController@memberSubmitOrder')->name('member-submit-order');

Route::get('/self/order/', 'MemberController@orderHistory')->name('order-history');
Route::post('/self/order/update-status', 'MemberController@updateTransactionStatus')->name('update-transaction-status');
Route::post('/self/order/transfer-money', 'MemberController@transferMoney')->name('transfer-money');

