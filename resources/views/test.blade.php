<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Well come my homepage  </title>
        <link rel="stylesheet" href="" type="text/css" />
    </head>
    <body>
        <h1> Well come here! </h1>
        {{ $a='<b>hahhahah</b>' }}
        {!!'<b>hahhahah</b>' !!}
       
       why1 {{$i or 5}} why2
       @for($i = 0; $i<10; $i++)
          Value i : {{$i}}<br/>
          {{ $users= $i;}}
       @endfor
       @forelse($users as $user)
           <p> This is user {{$user->id}}</p>
       @empty
           <p> No user </p>
       @endforelse
    </body>
</html>