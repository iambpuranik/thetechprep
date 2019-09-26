@extends('type.layouts.app')

@section('title', 'HTML/CSS Interview Question')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h3>HTML/CSS Interview Question</h3>
    <br>
    <div class="container">
        <div class="question-answer-block">
            @foreach($data as $dat)
                <b>{{ ucfirst($dat->question) }}</b> <span class="badge badge-danger" style="margin-left: 20px;">{{ ucfirst($dat->difficulty_level) }}</span>
                <div style="margin-left: 101px; margin-top: 8px" >
                    {!! $dat->answer !!}
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection