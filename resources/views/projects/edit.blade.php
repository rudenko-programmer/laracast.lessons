@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Edit projects</h1>
    <form method="post" action="/projects/{{ $project->id }}" class="" style="margin-bottom: 10px;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" id="title" class="input {{ $errors->has('title')?'is-danger':'' }}" name="title" value="{{ $errors->has('title')?old('title'):$project->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" id="description" class="textarea {{ $errors->has('description')?'is-danger':'' }}" >{{ $errors->has('description')?old('description'):$project->description }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>

        @include('errors')

    </form>
    <form method="post" action="/projects/{{ $project->id }}" class="">

        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-danger">Delete Project</button>
            </div>
        </div>
    </form>

@endsection
