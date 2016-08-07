<?php

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
*/
// Authentication Routes...
$this->get('login', 'Auth\AuthController@showLoginForm');
$this->post('login', 'Auth\AuthController@login');
$this->get('logout', 'Auth\AuthController@logout');

// Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');

Route::get('/', 'ProjectsController@index');

Route::get('submit-project', 'ProjectsController@create');
Route::get('projects/{slug}', 'ProjectsController@show');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'AdminProjectsController@index');
});

/*
|---------------------------------------------------------------------------
| API Routes
|---------------------------------------------------------------------------
*/
Route::group(['prefix' => 'api', 'namespace' => 'API'], function() {
    Route::get('projects', 'ProjectsController@index');
	Route::post('projects', 'ProjectsController@store');

	Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
	    Route::get('projects', 'AdminProjectsController@index');
	    Route::patch('approve-project/{slug}', 'AdminProjectsController@approveProject');
	});
});