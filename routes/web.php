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
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/plan', function () {
    return view('plan');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contactus');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blogdetail', function () {
    return view('blogdetail');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/reset', function () {
    return view('reset');
});


Route::prefix('dashboard')->group(function(){
    Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/plan', function () {
    return view('dashboard.plan');
});
Route::get('/logs', function () {
    return view('dashboard.logs');
});
Route::get('/deposit', function () {
    return view('dashboard.deposit');
});
Route::get('/deposithistory', function () {
    return view('dashboard.deposithistory');
});
Route::get('/withdraw', function () {
    return view('dashboard.withdraw');
});
Route::get('/withdrawhistory', function () {
    return view('dashboard.withdrawhistory');
});
Route::get('/transaction', function () {
    return view('dashboard.transaction');
});
Route::get('/promotionltools', function () {
    return view('dashboard.promotionaltools');
});
Route::get('/referraluser', function () {
    return view('dashboard.referraluser');
});
Route::get('/referralcommission', function () {
    return view('dashboard.referraluser');
});
Route::get('/interestcommission', function () {
    return view('dashboard.interestcommision');
});
Route::get('/investcommission', function () {
    return view('dashboard.investcommision');
});
Route::get('/profilesetting', function () {
    return view('dashboard.profilesetting');
});
Route::get('/changepassword', function () {
    return view('dashboard.changepassword');
});
Route::get('/deposit', function () {
    return view('dashboard.deposit');
});
Route::get('/interestwallet', function () {
    return view('dashboard.interestwallet');
});
Route::get('/interestwallettwo', function () {
    return view('dashboard.interestwallettwo');
});
Route::get('/log', function () {
    return view('dashboard.log');
});
Route::get('/newticket', function () {
    return view('dashboard.newticket');
});
Route::get('/profilesetting', function () {
    return view('dashboard.profilesetting');
});
Route::get('/referralcommission', function () {
    return view('dashboard.referralcommission');
});
Route::get('/referraluser', function () {
    return view('dashboard.referraluser');
});
Route::get('/ticket', function () {
    return view('dashboard.ticket');
});
Route::get('/transaction', function () {
    return view('dashboard.transaction');
});
Route::get('/transferbalance', function () {
    return view('dashboard.transferbalance');
});
Route::get('/twofactor', function () {
    return view('dashboard.twofactor');
});

Route::get('/logout', function(){
 return view('/signin');
});
});


