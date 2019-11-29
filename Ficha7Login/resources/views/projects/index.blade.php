@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    <br>
    <ul>
        @foreach ($projects as $project)
            <form method="POST" action="/projects/{{$project->id}}">
                @csrf
                @method('DELETE')
                <li>
                    {{ $project->title }}
                    <a href="/projects/{{$project->id}}">Show</a>
                    <a href="/projects/{{$project->id}}/edit">Edit</a>
                    <button type="submit" value="submit">Delete</button>
                </li>
            </form>
        @endforeach
    </ul>
    <br>

    <div class="control">
        <a href="/projects/create"><button class="button is-link">Add Project</button></a>
    </div>
    <br>
    <div class="control">
        <a href="/projects/first"><button class="button is-link">First Project</button></a>
    </div>
    <br>
    <div class="control">
        <a href="/projects/last"><button class="button is-link" >Last Project</button></a>
    </div>

    <br>
@endsection