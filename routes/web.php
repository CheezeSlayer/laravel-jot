<?php

Auth::routes();

// match the variable any with anything 0 or more times (everything)
Route::get('/{any}', 'AppController@index')->where('any', '.*');
