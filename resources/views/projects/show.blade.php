@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Project "{{ $project->title }}"</h1>
    <div class="content">{{ $project->description }}</div>
    <div>
        @if($project->tasks->count())
        <ul>
            @foreach($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </ul>
        @endif
    </div>
@endsection
