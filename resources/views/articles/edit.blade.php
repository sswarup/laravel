@extends('app')

@section('content')
    <h1>Edit Article</h1>
    <hr>
    @include('/errors/formError')
    {!! Form::model($article,['url'=>'articles/edit/'.$article->id]) !!}
        
        @include('/articles/form',['SubmitBtnText'=>'Update Article'])
        
    {!! Form::close() !!}

@stop