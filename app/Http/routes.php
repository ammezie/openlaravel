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

/*
|---------------------------------------------------------------------------
| API Routes
|---------------------------------------------------------------------------
*/
Route::group(['prefix' => 'api', 'namespace' => 'API'], function() {
    Route::get('projects', 'ProjectsController@index');
    // Route::get('submit-project', 'ProjectsController@create');
	Route::post('projects', 'ProjectsController@store');
});
