@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Projects page</h1>
    <ul>
    @foreach($projects as $project)
        <li>{{ $project->title }} <a class="link" href="{{ route('projects.edit', ['project' => $project->id]) }}">Edit</a></li>
    @endforeach
    </ul>
@endsection
