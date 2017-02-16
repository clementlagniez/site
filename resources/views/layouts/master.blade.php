<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
 
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('hub') }}">Portal</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="{{ route('hub') }}">Hub</a></li>
            <li><a href="{{ route('index') }}">Index</a></li>
            <li><a href="{{ route('artists.index') }}">Artists</a></li>
        </div>
    </div>
</nav>
 
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
 
</body>
</html>