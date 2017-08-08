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

/****************************
 * 
 * NOT FOUND HTTP EXCEPTION == เขียน Route ผิด
 *
 *****************************/

Route::get('/', 'ReminderController@home');

Route::get('/finished', 'ReminderController@showFinishedReminder');

Route::post('/reminder/new', 'ReminderController@addReminder');
Route::delete('/reminder/delete', 'ReminderController@deleteReminder');

Route::post('/remindertype/new', 'ReminderTypeController@addReminderType');

// Route::get('/profile', 'ProfileController@profile');

// Route::get('/remindertype', 'ReminderTypeController@listReminder');

Route::get('file', 'FileController@home');
Route::post('file/upload', 'FileController@upload');
Route::get('file/{fileName}', 'FileController@download');