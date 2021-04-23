<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\MailController;


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
    return view('index');
});

Route::get('/index.blade.php', function () {
    return view('index');
});

Route::get('/courses.blade.php', function () {
    return view('courses');
});

Route::get('/private.blade.php', function () {
    return view('private');
});


Route::get('mail/send', [MailController::class, 'send']);

Route::get('/{lang}', function($lang){
    App::setlocale($lang);
    return view('index');
});

Route::get('/{lang}', 'App\Http\Controllers\LocalizationController@index');

Route::get('/index.blade.php', 'App\Http\Controllers\EmployeeController@index');

Route::post('/addFile', 'App\Http\Controllers\EmployeeController@store')->name('addFile');