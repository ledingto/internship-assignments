<?php

// HOME PAGE ===================================
// we dont need to use Laravel Blade
// we will return a PHP file that will hold all of our Angular content
// see the "Where to Place Angular Files" below to see ideas on how to structure your app return
Route::get('/', function() {
    View::make('index'); // will return resources/views/index.php
});

});

// CATCH ALL ROUTE =============================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
App::missing(function($exception) {
    return View::make('index');
});
