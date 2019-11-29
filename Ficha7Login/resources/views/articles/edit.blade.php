@extends('layouts.app')

@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div col="row justify-content-left">
                <div class="col-md-12">
                    <form method="POST" action="/articles/{{ $article-> id }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group col-md-4">
                            <label for="title"><dt>Article Title:</dt></label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" value="{{ $article->title }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="content"><dt>Description:</dt></label>
                            <textarea class="md-textarea form-control {{ $errors->has('content') ? 'is-danger' : ''}}" name="content" placeholder="Content">{{ $article->content }}</textarea>
                        </div>
                        @if($article->featured != 0)
                            <div class="form-group form-check col-md-4">
                                <label class="form-check-label">
                                    <input type="checkbox" name="featured" checked>
                                        Featured
                                </label>
                            </div>
                        @else
                            <div class="form-group form-check col-md-4">
                                <label class="form-check-label">
                                    <input type="checkbox" name="featured">
                                        Featured
                                </label>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row justify-content-end">
                                    <button type="submit" class="btn btn-success">Edit Article</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="/articles/{{ $article->id }}">
                        @method('DELETE')
                        @csrf
                        <div class="col-md-4">
                            <div class="row justify-content-end">
                                <button type="submit" class="btn fixBtn btn-danger">Delete Article</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection