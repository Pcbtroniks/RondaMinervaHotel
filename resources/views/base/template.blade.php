<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TGBV6TW84F"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TGBV6TW84F');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Ronda Minerva Hotel')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
          @vite('resources/css/app.css')

        <!-- Meta Tags -->

        <meta name="description" content="Ronda Minerva Hotel es una joya de la cultura de Jalisco, el corazón de al ciudad de Guadalajara, es un referente de la historia de la ciudad. A solamente unas calles de La Minerva, uno de los sitios más representativos del país">
        <meta name="keywords" content="Hotel, Guadalajara, Ronda Minerva, Minerva, Hospedaje, Viaje, Turismo, Jalisco, México">
        <meta name="author" content="Ronda Minerva Hotel">
        <meta name="robots" content="index, follow">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@RondaMinervaHtl">
        <meta name="twitter:creator" content="@RondaMinervaHtl">
        <meta name="twitter:title" content="Hotel Ronda Minerva">
        <meta name="twitter:description" content="Ronda Minerva Hotel es una joya de la cultura de Jalisco, el corazón de al ciudad de Guadalajara, es un referente de la historia de la ciudad. A solamente unas calles de La Minerva, uno de los sitios más representativos del país">
        <meta name="twitter:image" content="{{ asset('img/logos/Ronda_Minerva-logo-blackandorange.png') }}">
        <!-- Facebook -->
        <meta property="og:url" content="https://rondaminervahotel.com/">
        <meta property="og:title" content="Hotel Ronda Minerva">
        <meta property="og:description" content="Ronda Minerva Hotel es una joya de la cultura de Jalisco, el corazón de al ciudad de Guadalajara, es un referente de la historia de la ciudad. A solamente unas calles de La Minerva, uno de los sitios más representativos del país">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('img/logos/Ronda_Minerva-logo-blackandorange.png') }}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">

        @yield('css')
    </head>
    <body class="antialiased">
        @yield('page')

        @yield('js')
    </body>
</html>
