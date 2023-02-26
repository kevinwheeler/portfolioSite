<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// TODO use a different title and description for each page.

Route::get('/', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/baby-keyboard-smash-game', function () {
    return view('baby-keyboard-smash')->with('devEnvironment', App::isLocal());
});

Route::get('/projects', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/projects/baby-keyboard-smash-game', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/projects/density-iterator', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/projects/geomesa-gui', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/projects/nothing-but-headlines', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/projects/portfolio', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/projects/translate-search', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::get('/projects/ubuntu-vps', function () {
    return view('welcome')->with('devEnvironment', App::isLocal());
});

Route::post('/api/email', [EmailController::class, 'email']);
