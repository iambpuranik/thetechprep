@extends('admin.layouts.app')

@section('title', 'Add Question')

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
                        <option value="html">HTML/CSS</option>
                        <option value="javascript">Javascript</option>
                        <option value="jquery">jQuery</option>
                        <option value="php">PHP</option>
                        <option value="laravel">Laravel</option>
                        <option value="mysql">MySQL</option>
                        <option value="mongodb">MongoDB</option>
                        <option value="ajax">Ajax</option>
                        <option value="seo">SEO</option>
                        <option value="testing">Testing</option>
                        <option value="agile">Agile/Scrum</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Question:</label>
                <div class="col-sm-10">
                    <input type="question" class="form-control" id="question" placeholder="Enter Question" name="question">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Answer:</label>
                <div class="col-sm-10">
                    <textarea id="summernote" name="answer" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Difficulty Level:</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="difficulty_level"  value="beginner" checked>Beginner
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="difficulty_level" value="intermediate">Intermediate
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="difficulty_level" value="advance">Advance
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