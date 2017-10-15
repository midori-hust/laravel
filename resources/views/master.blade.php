<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> @yield('title') </title>
        <link rel="stylesheet" href="" type="text/css" />
    </head>
    <body>
        <div class="container">
            @Parent{{'<p> This is master page! </p>'}}
            @section('content');
            @show
        </div>
    </body>
</html>