@extends('layoutArticles')

@section('content')
    <div class="container">
        <div class="field">
            <form method="GET" action="/articles">
                <div class="field has-addons">
                    <div class="control">
                        <input class="input" type="text" name="search" placeholder="Find an article" required>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-link">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>

    <div class="container">
        <h1 class="has-text-weight-bold">Options:</h1>
        <br>
        <ul class="list-inline" style="display: inline-flex">
            <li><a href="/articles?order=asc"><button class="button is-link">Order ASC</button></a></li>
            <li><a style="margin-left: 10px" href="/articles?order=desc"><button class="button is-link">Order DESC</button></a></li>
            <li><a style="margin-left: 10px" href="/articles/featured"><button class="button is-link">Featured Articles</button></a></li>
            <li><a style="margin-left: 10px" href="/articles/create"><button class="button is-link">Add Project</button></a></li>
        </ul>
    </div>

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