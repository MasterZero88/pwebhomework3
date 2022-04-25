<?php
    
    // Route::get('/',function() { echo 'Hello, World!'; });
    Route::resource('/','BookController@index');
    Route::resource('/book','BookController');
    //Route::resource('book', 'BookController');
    Route::resource('/author', 'AuthorController');
    Route::resource('/author/book', 'BookController');
    Route::get('author', 'AuthorController');

    Route::resource('/publisher', 'PublisherController');
    Route::get('publisher', 'PublisherController'); 
    Route::resource('/publisher/book', 'BookController');
    Route::dispatch();
?>
