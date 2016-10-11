<?php

/* Routes File

Here is where you will register routes in your application. Simply tell Laravel the URIs it should respond to
and give it the controller to call whe ntaht URI is requested.


*/

Route::get('/', function() {
    return 'Hello';
});

/* Application Routes

This route group applies the 'web' middleware group to every route it contains. The 'web' middleware group is defined in your HTTP kernel and includes session state, CSRF, and more.

*/

Route::group(['middleware' => ['web']], function() {

    //
});
