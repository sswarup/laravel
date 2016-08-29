@extends('app')

@section('content')
    <div class="btn btn-link pull-right"><a href="/articles/remove/{{ $article->id }}">Remove</a></div>
    <div class="btn btn-link pull-right"><a href="/articles/edit/{{ $article->id }}">Edit</a></div>
    <h1>{{ $article->title }}</h1>
    <div class="section">{{ $article->body }}</div>
@stop