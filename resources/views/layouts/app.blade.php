<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
 
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- LINE AWESOME -->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Kosugi+Maru&family=Zen+Antique&display=swap" rel="stylesheet">

        <!-- Lordicon -->
        <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('image/favicon.svg') }}">
    </head>
    <body class="bg-gray-100" style="font-family: 'Kosugi Maru'">
        <div class="px-3">
            <!-- ナビゲーションバー -->
            @include('layouts.navigation')
            <!-- アラート -->
            <x-alert />
            <!-- ページ内容 -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
