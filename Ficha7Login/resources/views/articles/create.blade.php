@extends('layouts.app')

@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div col="row justify-content-left">
                <div class="col-md-12">
                    <form method="POST" action="/articles">
                        {{ csrf_field() }}
                        <div class="form-group col-md-4">
                            <label for="title">Article Title:</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="content">Article description:</label>
                            <textarea class="md-textarea form-control {{ $errors->has('content') ? 'is-danger' : ''}}" name="content" placeholder="Content" required></textarea>
                        </div>
                        <div class="form-group form-check col-md-4">
                            <label class="form-check-label">
                                <input type="checkbox" name="featured">
                                    Featured
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row justify-content-end">
                                    <button type="submit" class="btn btn-success">Create Article</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection