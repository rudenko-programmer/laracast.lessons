@extends('layout')

@section('content')
    <div id="app">
        <example-component></example-component>
    </div>

    <h1>Mt {{$foo}} Website!</h1>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?php echo $task; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
@endsection
