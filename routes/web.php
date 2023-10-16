<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
Route::get('/', HomeController::class .'@index');
Route::post('sendbasicemail', HomeController::class .'@basic_email')->name('contact.formrequest');

// Route::get('sendbasicemail',\App\Http\Controllers\MailController::class,'@basic_email');
// Route::get('sendhtmlemail',\App\Http\Controllers\MailController::class,'@html_email');
// Route::get('sendattachmentemail',\App\Http\Controllers\MailController::class,'@attachment_email');