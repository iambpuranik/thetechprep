@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <a href="{{ route('admin.question-bank.create')}}" class="btn btn-sm btn-primary pull-right">Add Interview
        Question</a>
    <br><br>
    @if(Session::has('flash_message'))
        <div class="alert alert-success"><span
                    class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
    @endif
    <table id="table_id" class="display">
        <thead>
        <tr>
            <th>Type</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Difficulty Level</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{ $question->type  }}</td>
                <td>{{ $question->question  }}</td>
                <td>{{ strip_tags($question->answer)  }}</td>
                <td>{{ ucfirst($question->difficulty_level)  }}</td>
                <td>
                    <a href="{{ url('admin/question-bank/edit', $question->id) }}" class="btn btn-default"><i
                                class="fa fa-pencil"></i></a>
                    <a href="{{ url('admin/question-bank/delete', $question->id) }}" class="btn btn-default"><i
                                class="fa fa-trash-o" style="color:red"></i></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


@endsection

