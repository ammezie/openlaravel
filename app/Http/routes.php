<?php

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
*/
Route::get('/', 'ProjectsController@index');

Route::get('submit-project', 'ProjectsController@create');
Route::post('submit-project', 'ProjectsController@store');
Route::get('projects/{slug}', 'ProjectsController@show');

Route::group(['prefix' => 'dashboard'], function() {
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

	Route::group(['prefix' => 'admin'], function() {
	    Route::get('projects', 'AdminProjectsController@index');
	});
});
