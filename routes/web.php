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

Auth::routes(['register' => false]);


Route::group([ 'middleware'=> ['auth']], function () {

    Route::group(['prefix' => 'agent', "middleware" => "role:agent"], function () {

        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::put('/profile', 'ProfileController@update')->name('profile.update');

        Route::get('/cashout', function () {
            return view('agent.cashoutsRequest');
        });
        Route::get('/commissions', function () {
            return view('agent.commissionBreakdown');
        });
        Route::get('/points', function () {
            return view('agent.transferPoints');
        });
        Route::get('/sub-agents', function () {
            return view('agent.subAgents');
        });
        Route::get('/player', function () {
            return view('agent.player');
        });
        Route::get('/create-sub', function () {
            return view('agent.createSubAgent');
        });

        Route::get('/create-player', 'PlayerController@index')->name('player');
        Route::post('/create-player', 'PlayerController@signUp')->name('player.sign-up');

        Route::get('/home', 'HomeController@index')->name('home');


    });

        Route::get('/dashboard', function () {
            return view('player.index');
        })->middleware(['auth'])->name('dashboard');


});
