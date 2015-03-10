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

// MAIN TIME ENTRY PAGE

Route::any('/', [
	'before' => 'auth',
	'uses' => 'BrowserController@welcomePage'
]);


// GIT HOOK

Route::any('/deploy', 'DeployController@gitHook');
