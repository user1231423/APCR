@extends('layout')

@section('content')
    <h1 class="has-text-weight-bold">Featured article List -></h1>
    <br>
    <div class="container">
        <h1 class="has-text-weight-bold">Article List:</h1>
        <br>
        @if(count($articles) > 0)
            <table class="table" style="width: 100%">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <th scope="row">{{ $article->id }}</th>
                            <td>{{ $article->title }}</td>
                            <td>
                                <form method="GET" action="/articles/{{ $article->id }}">
                                    @csrf
                                    <div class="control">
                                        <button type="submit" class="button is-link">Show</button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form method="GET" action="/articles/{{ $article->id }}/edit">
                                    @csrf
                                    <div class="control">
                                        <button type="submit" class="button is-link">Edit</button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="/articles/{{ $article->id }}">
                                    @method('DELETE')
                                    @csrf
                                    <div class="control">
                                        <button type="submit" class="button is-link">Delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1 class="has-text-weight-bold">No articles found!</h1>
        @endif
    </div>
@endsection