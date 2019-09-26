<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuestionBank;

class InterviewQuestionController extends Controller
{
    public function html()
    {
        $data = QuestionBank::where('type', 'html')->get();
        return view('type/html')->with(compact('data'));
    }

    public function javascript()
    {
        $data = QuestionBank::where('type', 'javascript')->get();
        return view('type/javascript')->with(compact('data'));
    }

    public function jquery()
    {
        $data = QuestionBank::where('type', 'jquery')->get();
        return view('type/jquery')->with(compact('data'));
    }

    public function php()
    {
        $data = QuestionBank::where('type', 'php')->get();
        return view('type/php')->with(compact('data'));
    }

    public function laravel()
    {
        $data = QuestionBank::where('type', 'laravel')->get();
        return view('type/laravel')->with(compact('data'));
    }

    public function mysql()
    {
        $data = QuestionBank::where('type', 'mysql')->get();
        return view('type/mysql')->with(compact('data'));
    }

    public function ajax()
    {
        $data = QuestionBank::where('type', 'ajax')->get();
        return view('type/ajax')->with(compact('data'));
    }

    public function seo()
    {
        $data = QuestionBank::where('type', 'seo')->get();
        return view('type/seo')->with(compact('data'));
    }

    public function testing()
    {
        $data = QuestionBank::where('type', 'testing')->get();
        return view('type/testing')->with(compact('data'));
    }

    public function agile()
    {
        $data = QuestionBank::where('type', 'agile')->get();
        return view('type/agile')->with(compact('data'));
    }
}
