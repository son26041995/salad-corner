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
Route::post('/post/edit/{id}', 'PostController@edit')->name('post-edit');
Route::get('/post/{id}', 'PostController@detail')->name('post-detail');
Route::post('/post/delete/{id}', 'PostController@delete')->name('post-delete');
Route::get('/post/member_submit_order/{id}', 'PostController@memberSubmitOrder')->name('member-submit-order');

//self
Route::get('/self/order/', 'MemberController@orderHistory')->name('order-history');
Route::post('/self/order/update-status', 'MemberController@updateTransactionStatus')->name('update-transaction-status');
Route::post('/self/order/transfer-money', 'MemberController@transferMoney')->name('transfer-money');
Route::get('/self/order/transfer-money-history', 'MemberController@transferMoneyHistory')->name('transfer-money-history');
Route::post('/self/order/view-order-by-transferid', 'MemberController@viewOrderByTransferId');
Route::get('/self/coin/', 'MemberController@coinHistory');
Route::post('/self/coin/add', 'MemberController@addCoin');
Route::post('/self/coin/confirm_add_coin', 'MemberController@confirmAddCoin');


//admin
Route::get('/admin/transfer-money-manager/', 'AdminController@manageTransferMoney')->name('manage-transfer-money');
Route::post('/admin/confirm-transfer-money/', 'AdminController@receivedMoney')->name('received-money');

