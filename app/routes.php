<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::get('/about', 'PagesController@about');

Route::get('/who', 'PagesController@who');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/dashboard_medium', 'PagesController@dashboard_medium');

Route::get('/dashboard_low', 'PagesController@dashboard_low');

Route::get('/login', 'PagesController@login');

Route::get('/logout', 'PagesController@logout');

Route::resource('issues', 'IssuesController');

Route::resource('myIssues', 'MyIssuesController');

Route::resource('users', 'UsersController');

Route::resource('projects', 'ProjectsController');

Route::post('/login', 'PagesController@post_login');

Route::resource('roles', 'RolesController');

Route::resource('status','StatusController');

Route::resource('assign','AssignController');

Route::get('users-assign1/{id}', 'AssignController@getForm');
Route::post('post-assign', 'AssignController@postForm');

Route::get('/test', function() {
    $a = Issue::find(3);
    $b = Priority::find($a->priority_id);
    echo $b->title;
});

// DB::listen(function($sql) {
//     var_dump($sql);
// });

