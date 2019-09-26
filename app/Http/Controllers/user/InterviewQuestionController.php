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
}
