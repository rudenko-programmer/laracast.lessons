@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Project "{{ $project->title }}"</h1>
    <div class="content">{{ $project->description }}</div>

    @if($project->tasks->count())
    <div class="box">
        @foreach($project->tasks as $task)
            <div>
                <form method="POST" action="/completed-tasks/{{ $task->id }}">
                    @if($task->completed)
                        @method('DELETE')
                    @endif
                    @csrf
                    <label class="checkbox {{ $task->completed?'is-completed':'' }}" for="completed-{{ $task->id }}">
                        <input type="checkbox" id="completed-{{ $task->id }}" name="completed" onChange="this.form.submit()" {{ $task->completed?'checked':'' }}>
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
    </div>
    @endif

    <form action="/projects/{{ $project->id }}/tasks" method="post" class="box">

        @csrf

        <div class="field">
            <label for="description" class="label">New Task</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('description')?'is-danger':'' }}" name="description" placeholder="New Task" value="{{ old('description') }}">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>

        @include('errors')

    </form>
@endsection
