<?php

Route::get('/', 'ProjectsController@index');
Route::get('submit-project', 'ProjectsController@create');
Route::post('submit-project', 'ProjectsController@store');
