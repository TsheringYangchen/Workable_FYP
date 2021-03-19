<?php

//Front End UI
Route::get('/','RouteController@home')->name('home');
Route::get('/aboutus','RouteController@aboutus');
Route::get('/contact','RouteController@contact');
Route::get('/download','RouteController@download');
Route::get('/application','RouteController@application');

Route:: get ('/bin', function () {
    return view ('UI.BIN');
 });
 Route:: get ('/ein', function () {
    return view ('UI.EIN');
 });

Route::redirect('/admin', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::get('/create-provider','CreateproController@provide')->name('create-provider');
});
