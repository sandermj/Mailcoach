<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ isset($title) ? "{$title} | Mailcoach" : 'Mailcoach' }}</title>

    <link rel="stylesheet" href="{{ asset('vendor/mailcoach/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-blue-100">
    <div id="app">
    @include('mailcoach::app.layouts.partials.flash')

    <div class="min-h-screen flex place-center p-4">
        <div class="card w-full max-w-lg">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
