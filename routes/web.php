<?php


Route::get('/', function () {
    return view('welcome');
});

Route::GET('/html-css-interview-question', ['as' => 'html', 'uses' => 'user\InterviewQuestionController@html']);
Route::GET('/javascript-interview-question', ['as' => 'javascript', 'uses' => 'user\InterviewQuestionController@javascript']);
Route::GET('/jquery-interview-question', ['as' => 'jquery', 'uses' => 'user\InterviewQuestionController@jquery']);
Route::GET('/php-interview-question', ['as' => 'php', 'uses' => 'user\InterviewQuestionController@php']);
Route::GET('/laravel-interview-question', ['as' => 'laravel', 'uses' => 'user\InterviewQuestionController@laravel']);
Route::GET('/mysql-interview-question', ['as' => 'mysql', 'uses' => 'user\InterviewQuestionController@mysql']);
Route::GET('/ajax-interview-question', ['as' => 'ajax', 'uses' => 'user\InterviewQuestionController@ajax']);
Route::GET('/seo-interview-question', ['as' => 'seo', 'uses' => 'user\InterviewQuestionController@seo']);
Route::GET('/testing-interview-question', ['as' => 'testing', 'uses' => 'user\InterviewQuestionController@testing']);
Route::GET('/agile-scrum-interview-question', ['as' => 'agile', 'uses' => 'user\InterviewQuestionController@agile']);


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

    Route::GET('admin/question-bank/edit/{id}', 'admin\QuestionBankController@edit');
    Route::post('admin/question-bank/update', ['as' => 'admin.question-bank.update', 'uses' => 'admin\QuestionBankController@update']);

    Route::GET('admin/question-bank/delete/{id}', 'admin\QuestionBankController@destroy');
});
