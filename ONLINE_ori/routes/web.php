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
// in case multiple lang
if (App::isLocale('en')) {
    Route::get('/', function () {
        return view('mainsite.home');
    });
    Route::get('/aboutus', function () {
        return view('mainsite.aboutus');
    });
    Route::get('/contactus', function () {
        return view('mainsite.contactus');
    });
    Route::get('/download', function () {
        return view('mainsite.download');
    });
    Route::get('/support', function () {
        return view('mainsite.support');
    });
    Route::get('/useraccmanagement', function () {
        return view('mainsite.useraccmanagement');
    });
    Route::get('/paybill', function () {
        return view('mainsite.paybill');
    });
    Route::get('/ourservices/internet', function () {
        return view('mainsite.ourservices_internet');
    });
    Route::get('/ourservices/businesssolution', function () {
        return view('mainsite.ourservices_businesssolution');
    });
    Route::get('/ourservices/connection', function () {
        return view('mainsite.ourservices_connection');
    });
    Route::get('/ourservices/servercenter', function () {
        return view('mainsite.ourservices_servercenter');
    });
}