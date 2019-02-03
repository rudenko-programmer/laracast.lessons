@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Project "{{ $project->title }}"</h1>
    <p>{{ $project->description }}</p>
@endsection
