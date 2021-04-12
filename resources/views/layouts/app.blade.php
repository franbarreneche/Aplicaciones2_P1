<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Reciclado CS' }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <!-- Icons -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" defer></script>

</head>

<body>
    <x-navbar />
    <section class="section has-background-light">
        <div class="container">
            <div class="has-text-centered pb-4">
                <p class="title">@yield("title")</p>
                <p class="subtitle">@yield("subtitle")</p>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>
</body>

</html>
