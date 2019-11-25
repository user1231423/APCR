@extends('layoutArticles')

@section('content')
    <h1>Article title: {{ $article->title }}</h1>
    <br>
    @if($article->content != null)
        <h1>Article content: {{ $article->content }}</h1>
    @else
        <h1>No content!!</h1>
    @endif
    <br>
    @if($article->featured != 0)
        <h1>Article is featured!</h1>
    @else
        <h1>Article isn't featured!</h1>
    @endif
    <br>
    <h1>Created at: {{ $article->created_at }}</h1>
    <br>
    @if($article->created_at != $article->updated_at)
        <h1>Last Updated at: {{ $article->updated_at }}</h1>
    @else
        <h1>Article hasn't been updated yet!</h1>
    @endif
    <br>
    <div class="field">
        <div class="control">
            <a href="/articles/{{$article->id}}/edit">
                <button type="submit" class="button is-link">Edit article</button>
            </a>
        </div>
    </div>
@endsection