@extends('layouts.app')

@section('content')
    @include('errors')
    <div class="row">
        <div class="col-md-12">
            <div col="row justify-content-left">
                <div class="col-md-12">
                        <div class="form-group col-md-4">
                            <label for="title"><dt>Article Title:</dt></label>
                            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $article->title }}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="content"><dt>Article description:</dt></label>
                            <textarea class="md-textarea form-control" name="content" placeholder="Content" disabled>{{ $article->content }}</textarea>
                        </div>
                        @if($article->featured != 0)
                            <div class="form-group form-check col-md-4">
                                <label class="form-check-label">
                                    <input type="checkbox" name="featured" checked disabled>
                                        Featured
                                </label>
                            </div>
                        @else
                            <div class="form-group form-check col-md-4">
                                <label class="form-check-label">
                                    <input type="checkbox" name="featured" disabled>
                                        Featured
                                </label>
                            </div>
                        @endif
                        @if($article->created_at != $article->updated_at)
                            <div class="form-group col-md-4">
                                <label for="title"><dt>Article last Updated at:</dt></label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $article->updated_at }}" disabled>
                            </div>
                        @else
                            <div class="form-group col-md-4">
                                <label for="title"><dt>Last Updated at:</dt></label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="Hasn't been updated yet!" disabled>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row justify-content-end">
                                    <a href="/articles/{{$article->id}}/edit">
                                        <button type="submit" class="btn btn-success">Edit Article</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection