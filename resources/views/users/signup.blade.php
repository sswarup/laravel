@extends('app')

@section('content')
    <h1>Sign up</h1>
    <hr>
    @include('/errors/formError')
    <div class="panel panel-default">
        
        {!! Form::open(['url'=>'/signup']) !!}
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Confirm Password') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('confirmPassword','Confirm Password') !!}
                    {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="panel-footer">
                <div class="form-group">
                    {!! Form::submit('Sign up',['class'=>'btn btn-primary form-control']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@stop