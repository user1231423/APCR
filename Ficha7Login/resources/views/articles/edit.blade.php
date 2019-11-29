@extends('layout')

@section('content')
    @include('errors')
    <form method="POST" action="/articles/{{ $article-> id }}">
        {{ method_field('PATCH') }}
        @csrf

        <div class="field">
            <label class="label" for="title">Article Title</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" value="{{ $article->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="content">Article description</label>
            <div class="control">
                <textarea class="textarea {{ $errors->has('content') ? 'is-danger' : ''}}" name="content" placeholder="Content">{{ $article->content }}</textarea>
            </div>
        </div>
        @if($article->featured != 0)
            <div class="field">
                <label class="checkbox">
                    <input type="checkbox" name="featured" checked>
                        Featured
                </label>
            </div>
        @else
            <div class="field">
                <label class="checkbox">
                    <input type="checkbox" name="featured">
                        Featured
                </label>
            </div>
        @endif
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Edit Article</button>
            </div>
        </div>
    </form>
    <br>
    <form method="POST" action="/articles/{{ $article->id }}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete Article</button>
            </div>
        </div>
    </form>
@endsection