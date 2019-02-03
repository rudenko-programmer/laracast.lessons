@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Projects page</h1>
    <ul>
    @foreach($projects as $project)
        <li>
            <h3>{{ $project->title }}</h3>
            <a class="button" href="{{ route('projects.show', ['project' => $project->id]) }}">show</a>
            <a class="button" href="{{ route('projects.edit', ['project' => $project->id]) }}">edit</a></li>
    @endforeach
    </ul>
@endsection
