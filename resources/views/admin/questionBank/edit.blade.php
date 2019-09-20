@extends('admin.layouts.app')

@section('title', 'Edit Question')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h3>Add Interview Question</h3>
    <br>
    <div class="container">
        <form class="form-horizontal" method="post" action="{{ route('admin.question-bank.store')}}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Type:</label>
                <div class="col-sm-10">
                    <select name="type" class="form-control">
                        <option {{($question->type == "html") ? 'selected' : ''}} value="html">HTML/CSS</option>
                        <option {{($question->type == "javascript") ? 'selected' : ''}} value="javascript">Javascript</option>
                        <option {{($question->type == "jquery") ? 'selected' : ''}} value="jquery">jQuery</option>
                        <option {{($question->type == "php") ? 'selected' : ''}} value="php">PHP</option>
                        <option {{($question->type == "laravel") ? 'selected' : ''}} value="laravel">Laravel</option>
                        <option {{($question->type == "mysql") ? 'selected' : ''}} value="mysql">MySQL</option>
                        <option {{($question->type == "mongodb") ? 'selected' : ''}} value="mongodb">MongoDB</option>
                        <option {{($question->type == "ajax") ? 'selected' : ''}} value="ajax">Ajax</option>
                        <option {{($question->type == "seo") ? 'selected' : ''}} value="seo">SEO</option>
                        <option {{($question->type == "testing") ? 'selected' : ''}} value="testing">Testing</option>
                        <option {{($question->type == "agile") ? 'selected' : ''}} value="agile">Agile/Scrum</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Question:</label>
                <div class="col-sm-10">
                    <input type="question" class="form-control" value="{{ $question->question }}" id="question" placeholder="Enter Question" name="question">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Answer:</label>
                <div class="col-sm-10">
                    <textarea id="summernote" name="answer" class="form-control">{{ $question->answer }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Difficulty Level:</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input {{($question->difficulty_level == "beginner") ? 'checked' : ''}} type="radio" name="difficulty_level"  value="beginner" checked>Beginner
                    </label>
                    <label class="radio-inline">
                        <input {{($question->difficulty_level == "intermediate") ? 'checked' : ''}} type="radio" name="difficulty_level" value="intermediate">Intermediate
                    </label>
                    <label class="radio-inline">
                        <input {{($question->difficulty_level == "advance") ? 'checked' : ''}} type="radio" name="difficulty_level" value="advance">Advance
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection