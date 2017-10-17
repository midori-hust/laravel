<h1> Login Success ! </h1>
@if(isset($user))
    {{"Name User : ".$user->name }} <br>
    {{"Email User :".$user->email }} 
    <a href="{{url('logout')}}"> Logout</a>
@endif