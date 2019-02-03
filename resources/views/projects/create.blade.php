@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">Create new projects</h1>

    <form method="post" action="/projects" class="" style="margin-bottom: 10px;">
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" id="title" class="input {{ $errors->has('title')?'is-danger':'' }}" name="title" value="{{ old('title') }}" >
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" id="description" class="textarea {{ $errors->has('description')?'is-danger':'' }}" >{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>

@endsection
