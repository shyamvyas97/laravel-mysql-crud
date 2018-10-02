<?php

	Route::get('/', function () {
    	return view('welcome');
	});



    
    Route::get('test', function () {
        return 'login';
    });

	Route::get('/insert',function () {
    	return view('form');
	});

    Route::get('/insert1','employ@insert');

	Route::get('/display','employ@display');

	Route::get('/update/{id}', 'employ@update');

	Route::get('/delete/{id}','employ@delete');

	Route::get('/update1','employ@update1');


Route::get('/addProduct','ProductController@store');
Route::get('/updateProduct','ProductController@update');
Route::get('/displayProduct','ProductController@show');

Route::get('/deleteProduct','ProductController@destroy')->middleware('auth');
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
