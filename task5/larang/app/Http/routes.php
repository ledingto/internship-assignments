<?php

// HOME PAGE ===================================
// we dont need to use Laravel Blade
// we will return a PHP file that will hold all of our Angular content
Route::get('/', function() {
    return View('index');
});

// API ROUTES ==================================
Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('users', 'UserController',
        array('only' => array('index', 'store')));

});
