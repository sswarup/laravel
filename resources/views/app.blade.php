<!DOCTYPE html>
<html>
    <head>
        <title>Laravel | Article</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Articles</a>
            </div>
            <ul class="nav navbar-nav pull-right">
            @if(!Session::has('user'))
                <li><a href="/signup">Sign up</a></li>
                <li><a href="/login">Log in</a></li>
            @else
                <li><a href="/articles/create">Create Article</a></li>
                <li><a href="/logout">Logout</a></li>    
            @endif
            </ul>
            <ul class="nav navbar-nav pull-left">
            @if(Session::has('user'))
                <li><a href="/articles">Home</a></li>    
            @endif
            </ul>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
