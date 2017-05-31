<?php

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
*/
// Authentication Routes...
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('/', 'ProjectsController@index');
Route::get('contact', 'PageController@contact');

Route::get('submit-project', 'ProjectsController@create');
Route::post('submit-project', 'ProjectsController@store');
Route::get('projects/{slug}', 'ProjectsController@show');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'AdminProjectsController@index');
    Route::get('project/{project}/edit', ['as' => 'project.edit', 'uses' => 'AdminProjectsController@edit']);
    Route::put('project/{project}/edit', ['as' => 'project.update', 'uses' => 'AdminProjectsController@update']);
});

/*
|---------------------------------------------------------------------------
| API Routes
|---------------------------------------------------------------------------
*/
Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::get('projects', 'ProjectsController@index');
    Route::post('projects', 'ProjectsController@store');
    // Route::get('projects/{slug}', 'ProjectsController@show');

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('projects', 'AdminProjectsController@index');
        Route::patch('approve-project/{slug}', 'AdminProjectsController@approveProject');
    });
});
