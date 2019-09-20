<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\QuestionBank;

class QuestionBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = QuestionBank::get();
        return view('admin/questionBank/index')
            ->with(compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/questionBank/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questionBank = new QuestionBank();
        $questionBank->type = $request->type;
        $questionBank->question = $request->question;
        $questionBank->answer = $request->answer;
        $questionBank->difficulty_level = $request->difficulty_level;

        if ($questionBank->save()) {
            \Session::flash('flash_message', 'Successfully saved.');
            return redirect()->route('admin.question-bank.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = QuestionBank::where('id', $id)->first();
        return view('admin.questionBank.edit')->with(compact('question'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $questionBank = QuestionBank::find($id);
        $questionBank->type = $request->type;
        $questionBank->question = $request->question;
        $questionBank->answer = $request->answer;
        $questionBank->difficulty_level = $request->difficulty_level;
        $questionBank->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = QuestionBank::where('id', $id)->delete();
        \Session::flash('flash_message', 'Successfully deleted.');
        return redirect()->route('admin.question-bank.index');
    }
}
