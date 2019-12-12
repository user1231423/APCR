@extends('layouts.app')

@section('content') 
    @include('errors')
        <form method="POST" action="/projects/{{ $project-> id}}">
            {{ method_field('PATCH') }}

            @csrf
            <div class="field">
                <label  class="label" for="title">Title</label>

                <div class="control">
                    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" value="{{ $project->title }}">
                </div>

            </div>

            <div class="field">
                <label  class="label" for="description">Description</label>

                <div class="control">
                    <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}" name="description">{{ $project->description }}</textarea>
                </div>

            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update project</button>
                </div>
            </div>
        </form>
    
    <br>
    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <div class="control">
            <button type="submit" class="button is-link">DELETE</button>
        </div>
    </form>
@endsection
