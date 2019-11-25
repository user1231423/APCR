@extends('layoutProjects')

@section('content')
    @include('errors')
    <h1>Create project</h1>
    <br>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" value="{{ old('title') }}">
        <br>
        <br>
        <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}" name="description">{{ old('description') }}</textarea>
        <br>
        <br>
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </form>
@endsection
