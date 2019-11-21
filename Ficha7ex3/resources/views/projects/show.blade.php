@extends('layoutProjects')

@section('content')
    <h1>Project</h1>
    <br>
    <ul>
        <li>{{ $project->title }}</li>
        <li>{{ $project->description }}</li>
    </ul>
    <br>
    <a href="/projects/{{$project->id}}/edit">Edit</a>
@endsection