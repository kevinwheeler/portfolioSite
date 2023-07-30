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
        'Kevin Wheeler\'s Software/Web Development Portfolio'
    )->with(
        'description',
        'Kevin Wheeler is a software and web developer with experience in Spring, Laravel, Node.js, React, Vue.js, Backbone.js, Java, JavaScript, PHP, Python, C++, Scala, HTML, and CSS among many other technologies listed on his resume. Kevin graduated with highest honors from UT Austin with a B.S. in Computer Science.'
    );
});

Route::get('/baby-keyboard-smash-game', function () {
    return view('baby-keyboard-smash')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Baby Keyboard Smash Game'
    )->with(
        'description',
        'A fun game for babies and toddlers. A firework visual and sound is triggered on keypresses and clicks or taps.'
    );
});

Route::get('/projects', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'All Projects'
    )->with(
        'description',
        'All of the projects in Kevin Wheeler\'s web development portfolio.'
    );
});

Route::get('/projects/baby-keyboard-smash-game', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Baby Keyboard Smash Game Porfolio Page'
    )->with(
        'description',
        'Portfolio page for Kevin Wheeler\'s Baby Keyboard Smash Game.'
    );
});

Route::get('/projects/density-iterator', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Temporal Density Iterator Portfolio Page'
    )->with(
        'description',
        'Portfolio page for Kevin Wheeler\'s Temporal Density Iterator open source contribution.'
    );
});

Route::get('/projects/geomesa-gui', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'GeoMesa GUI Portfolio Page'
    )->with(
        'description',
        'Portfolio page for Kevin Wheeler\'s GeoMesa GUI open source contribution.'
    );
});

Route::get('/projects/nothing-but-headlines', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Nothing But Headlines Portfolio Page'
    )->with(
        'description',
        "Portfolio page for Kevin Wheeler's Nothing But Headlines project."
    );
});

Route::get('/projects/portfolio', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Portfolio Page for Portfolio Project'
    )->with(
        'description',
        'Portfolio page for Kevin Wheeler\'s Portfolio project.'
    );
});

Route::get('/projects/random-video', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Portfolio Page for Random Video Project'
    )->with(
        'description',
        'Portfolio page for Kevin Wheeler\'s Random Video project.'
    );
});

Route::get('/projects/translate-search', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Translate Search Portfolio Page'
    )->with(
        'description',
        'Portfolio page for Kevin Wheeler\'s Translate Search project.'
    );
});

Route::get('/projects/ubuntu-vps', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Ubuntu VPS Portfolio Page'
    )->with(
        'description',
        'Portfolio page for Kevin Wheeler\'s Ubuntu VPS project.'
    );
});

Route::get('/resume', function () {
    return view('welcome')->with('devEnvironment', App::isLocal())->with(
        'title',
        'Kevin Wheeler\'s Resume'
    )->with(
        'description',
        'Kevin Wheeler\'s resume.'
    );
});

Route::post('/api/email', [EmailController::class, 'email']);
