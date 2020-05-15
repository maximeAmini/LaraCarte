<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@isset($titre) {{$titre.' | '}} @endisset LaraCarte</title>
    <meta name="viewport" content="width=device-width" />
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="css/bootstrap/js/jquery.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <style>
        body {
            margin-top: 80px;
        }

    </style>
</head>

<body>
    @include('layouts.partials.menu')

    @yield('contenu')

    @include('layouts.partials.footer')

</body>

</html>
