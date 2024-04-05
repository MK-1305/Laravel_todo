<html>
<head>
    <title>{{ $title ?? 'Laravel TODO' }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <nav>
    <hr>
    </nav>
    {{ $slot }}
    <footer>
    <hr />
    </footer>
</body>
</html>