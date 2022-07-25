<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\CaseReports;

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
use App\User;
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
Route::post('/contact', 'WebController@support');
Route::post('/sponsor-a-child', 'WebController@sponsor');
Route::get('/', 'WebController@index');
Route::get('/home', 'WebController@index');
Route::get('/impact-reports-financials', function(){
    return view('annual-report');
});

Route::get('/contact', function(){
    return view('contact');
});
Route::get('/sponsor-a-child', function(){
    return view('sponsor-a-child');
});
Route::get('/who-we-are', function(){
    return view('who-we-are');
});
Route::get('/meet-the-team', function(){
    return view('meet-the-team');
});
Route::get('/get-involved', function(){
    return view('get-involved');
});
Route::get('/our-work', function(){
    return view('our-work');
});
Route::get('/projects', function(){
    return view('projects');
});
Route::get('/privacy-policy', function(){
    return view('privacy');
});Route::get('/terms-of-services', function(){
    return view('terms');
});
Route::get('/kih', function () {
    return view('kih.home');
});
Route::get('/kih/register', function () {
    return view('kih.register');
});
Route::get('/kih/contact-us', function () {
    return view('kih.contact');
});
Route::get('/kih/after-school', function () {
    return view('kih.after-school');
});
Route::get('/kih/bootcamps', function () {
    return view('kih.bootcamps');
});
Route::get('/kih/in-school-training', function () {
    return view('kih.in-school-training');
});
Route::get('/kih/support', function () {
    return view('kih.support');
});