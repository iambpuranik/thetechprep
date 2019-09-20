<?php


Route::get('/', function () {
    return view('welcome');
});

//admin login page
Route::get('admin-login', function () {
    return view('admin/admin-login');
});
//login
Route::POST('/login', ['as' => 'validateLogin', 'uses' => 'admin\LoginController@validateLogin']);
//logout
Route::GET('/logout', ['as' => 'logout', 'uses' => 'admin\LoginController@logout']);


//routes accessible for admin only
Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/index', function () {
        return view('admin/index');
    });
    //php
    Route::GET('admin/question-bank', ['as' => 'admin.question-bank.index', 'uses' => 'admin\QuestionBankController@index']);
    Route::GET('admin/question-bank/create', ['as' => 'admin.question-bank.create', 'uses' => 'admin\QuestionBankController@create']);
    Route::post('admin/question-bank/store', ['as' => 'admin.question-bank.store', 'uses' => 'admin\QuestionBankController@store']);

    Route::GET('admin/question-bank/edit/{id}','admin\QuestionBankController@edit');
    Route::post('admin/question-bank/update', ['as' => 'admin.question-bank.update', 'uses' => 'admin\QuestionBankController@update']);

    Route::GET('admin/question-bank/delete/{id}','admin\QuestionBankController@destroy');



});
