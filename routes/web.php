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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/chats', 'Client\ChatController@index')->name('chats');
Route::get('/chats/view', 'Client\ChatController@view')->name('chats.view');
Route::get('/people', 'Client\PeopleController@index')->name('people');
Route::get('/settings', 'Client\SettingsController@index')->name('settings');

Route::post('/send-message', 'Client\ChatController@sendMessage')->name('chat.send-message');


