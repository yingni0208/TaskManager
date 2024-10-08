<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>@yield("title")| Task Manager</title>
</head>
<body>
    <header>
        @include("layouts.header")
    </headr>

    <main>
        @yield("content")
    </main>

    <footer>
        @include("layouts.footer")
    </footer>

    <script src='{{ asset("js/app.js") }}'></script>
</body>
</html>