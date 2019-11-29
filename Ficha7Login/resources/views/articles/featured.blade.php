@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div col="row justify-content-left">
                <div class="col-md-12">
                    <h1 class="display-6">Featured Articles List:</h1>
                        @if(count($articles) > 0)
                            <table class="table table-hover">
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
                                            <td>
                                                <h4 class="font-weight-bold">{{ $article->title }}</h4>
                                            </td>
                                            <td>
                                                <form method="GET" action="/articles/{{ $article->id }}">
                                                    @csrf
                                                    <div class="control">
                                                        <button type="submit" class="btn btn-success">Show</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <form method="GET" action="/articles/{{ $article->id }}/edit">
                                                    @csrf
                                                    <div class="control">
                                                        <button type="submit" class="btn btn-warning">Edit</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <form method="POST" action="/articles/{{ $article->id }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="control">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
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
            </div>
        </div>
    </div>
@endsection