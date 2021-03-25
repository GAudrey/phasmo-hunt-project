<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}" />

        <title>{{ $title }}</title>

    </head>

    <body>

        <header>
            <h1>PHAMOPHOBIA</h1>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer>
            Somethings
        </footer>

        <script type="text/javascript" src="{{ url('js/app.js') }}"></script>
    </body>

</html>
