@extends('app')

@section('content')
    <h1>Create Article</h1>
    <hr>
    @include('/errors/formError')
    {!! Form::open(['url'=>'articles']) !!}
        
        @include('/articles/form',['SubmitBtnText'=>'Create Article'])
        
    {!! Form::close() !!}   
@stop