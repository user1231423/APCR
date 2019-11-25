@extends('layoutArticles')

@section('content')
    @include('errors')
    <form method="POST" action="/articles">
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Article Title</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="content">Article description</label>
            <div class="control">
                <textarea class="textarea {{ $errors->has('content') ? 'is-danger' : ''}}" name="content" placeholder="Content" required></textarea>
            </div>
        </div>
        <div class="field">
            <label class="checkbox">
                <input type="checkbox" name="featured">
                    Featured
            </label>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Article</button>
            </div>
        </div>
    </form>
@endsection