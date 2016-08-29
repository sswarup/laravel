@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif

@if(isset($page) && $page == 'login' && Session::get('loginError'))
    <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
@endif