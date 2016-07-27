<?php

Route::get('/', function() {
	return view('projects.index');
});

// Route::get('submit-project', 'ProjectsController@create');
// Route::post('submit-project', 'ProjectsController@store');
Route::get('projects/{slug}', 'ProjectsController@show');

Route::group(['prefix' => 'api'], function() {
    Route::get('projects', 'ProjectsController@index');
    Route::get('submit-project', 'ProjectsController@create');
	Route::post('submit-project', 'ProjectsController@store');
});
