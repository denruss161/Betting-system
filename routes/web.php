<?php

use App\Http\Controllers\AdminAgentsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PlayerWalletController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/invite/create', [AdminAgentsController::class, 'referralView'])->name('admin.agents.invite');
Route::post('/invite/{referralToken}', [AdminAgentsController::class, 'referralRegistration'])->name('admin.agents.inviteStore');

Route::group(['middleware' => ['auth']], function () {

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
        Route::get('/create-sub', function () {
            return view('agent.createSubAgent');
        });

        Route::resource('/player', PlayerController::class);
        Route::resource('/wallet', \App\Http\Controllers\WalletController::class);

        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/agents/referred', [AdminAgentsController::class, 'index'])->name('admin.agents.index');
        Route::post('/agents', [AdminAgentsController::class, 'store'])->name('admin.agents.store');
        Route::get('/agent/create', [AdminAgentsController::class, 'create'])->name('admin.agents.create');
    });

    Route::get('/dashboard', function () {
        return view('player.index');
    })->middleware(['auth'])->name('dashboard');


    Route::get('/wallet', [PlayerWalletController::class, 'index'])->name('player.wallet.index');

    Route::get('/arena', function () {
        return view('player.arena');
    })->middleware(['auth'])->name('arena');

});
