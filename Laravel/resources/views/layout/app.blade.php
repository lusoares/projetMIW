<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        {{config('app.name')}}

        @if(isset($page_title))
         - {{$page_title}}
        @endif

    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

@include('layout.navigation')

<div class="container">
    <h3>Basic Navbar Example</h3>
    <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
    <div>
        @yield('content')
    </div>
</div>


</body>
</html>
