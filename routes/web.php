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

// !! TITLES AND DESCRPTIONS ARE DUPLICATED/RELIED UPON IN ROUTER.JS !!

Route::get('/', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Andrew LaBoy\'s Unity and AR / VR / XR Portfolio'
    )->with(
        'description',
        'Andrew LaBoy is a Unity developer specializing in augmented and virtual reality applications and games.'
    );
});

Route::get('/projects', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'All Projects'
    )->with(
        'description',
        'All of the projects in Andrew LaBoy\'s portfolio.'
    );
});

Route::get('/projects/ar-graffiti', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Portfolio Page for AR Graffiti Project'
    )->with(
        'description',
        'Portfolio page for Andrew LaBoy\'s AR Graffiti project.'
    );
});

Route::get('/projects/dream-stream', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Portfolio Page for Dream Stream Project'
    )->with(
        'description',
        'Portfolio page for Andrew LaBoy\'s Dream Stream project.'
    );
});

Route::get('/projects/hologram', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Realtime Hologram Portfolio Page'
    )->with(
        'description',
        'Portfolio page for Andrew LaBoy\'s realtime hologram project.'
    );
});

Route::get('/projects/multiplayer-painting', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Multiplayer Painting Portfolio Page'
    )->with(
        'description',
        "Portfolio page for Andrew LaBoy's Multiplayer Painting project."
    );
});

Route::get('/resume', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Andrew LaBoy\'s Resume'
    )->with(
        'description',
        'Andrew LaBoy\'s resume.'
    );
});

Route::post('/api/email', [EmailController::class, 'email']);
