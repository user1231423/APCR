@extends('layouts.app')

@section('content')
    <h1>Project</h1>
    <br>
    <ul>
        <li>{{ $project->title }}</li>
        <li>{{ $project->description }}</li>
    </ul>
    <br>
    <a href="/projects/{{$project->id}}/edit">Edit</a>
    <br>
    <br>
    <h1 class="title">Project {{ $project->id }} Tasks </h1>
    @if($project->tasks->count())
        @foreach ($project->tasks as $task)
        <br>
            <div>
                <form method="POST" action="/tasks/{{ $task->id }}">
                    @method('PATCH')
                    @csrf
                    <h2 class="subtitle">{{ $task->description }}</h2>
                    <label class="checkbox {{ $task->completed ? 'is-complete': '' }}" for="completed">
                        Complete:
                        <input type="checkbox" name="completed" onChange="this.form.submit() {{ $task->completed ?  'checked': ''}}">
                    </label>
                </form>
            </div>
        @endforeach
    @endif

    <br>

    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf
        <div>
            <label class="label" for="description">New Task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" calss="button is-link"> Add Task</button>
            </div>
        </div>
    </form>
@endsection