@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>Create new projects</h1>

    <form method="post" action="/projects" class="">

        {{ csrf_field() }}

        <div>
            <input type="text" name="title">
        </div>
        <div>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button>Create Project</button>
        </div>
    </form>

@endsection
