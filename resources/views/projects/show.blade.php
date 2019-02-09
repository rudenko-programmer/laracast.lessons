@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Project "{{ $project->title }}"</h1>
    <div class="content">{{ $project->description }}</div>

    @if($project->tasks->count())
    <ul>
        @foreach($project->tasks as $task)
            <div>
                <form method="POST" action="/tasks/{{ $task->id }}">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox {{ $task->completed?'is-completed':'' }}" for="completed-{{ $task->id }}">
                        <input type="checkbox" id="completed-{{ $task->id }}" name="completed" onChange="this.form.submit()" {{ $task->completed?'checked':'' }}>
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
    </ul>
    @endif
@endsection
