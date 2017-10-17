<h1> {{ $error or ''}}</h1>
<form action="{{url('login_auth')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="username"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="submit" value="Submit"/>
</form>