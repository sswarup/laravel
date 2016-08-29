@extends('app')

@section('content')
    <h1>Log in</h1>
    <hr>
    @include('/errors/formError',['page'=>'login'])
    <div class="panel panel-default">
        {!! Form::open(['url'=>'/login']) !!}
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Confirm Password') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                </div>
            <div class="panel-footer">
                <div class="form-group">
                    {!! Form::submit('Log in',['class'=>'btn btn-primary form-control']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@stop