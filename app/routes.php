<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('/', function () {
    return View::make('home');
});

Route::any('/clan_values', function () {
    return View::make('clan_values');
});

Route::any('/clan_structure', function () {
    return View::make('clan_structure');
});

Route::any('/members_teams', function () {
    return View::make('members_teams');
});

Route::any('/recruitment', function () {
    return View::make('recruitment');
});