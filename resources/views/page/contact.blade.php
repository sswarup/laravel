@extends('app')

@section('content')
<div class="title">Laravel 5</div>
<iv class="quote">{{ Inspiring::quote() }}</div>

@stop

@section('footer')
    <h3>footer</h3>
@stop