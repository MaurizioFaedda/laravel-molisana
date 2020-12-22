<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
    </head>
    <body>

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

    </body>
</html>
