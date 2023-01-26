<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
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
        <p class="text-center text-3xl text-gray-600 mt-8">株式会社ワーム</p>
        <p class="text-center text-8xl text-gray-600" style="font-family: 'Archivo Black';">MASTER</p>
        @if (Route::has('login'))
            <div class="grid grid-cols-12 relative top-20">
                @auth
                    <a href="{{ route('top.index') }}" class="col-start-2 col-span-10 text-6xl text-center bg-gray-600 text-white h-60 py-20 rounded-lg">ホーム</a>
                @else
                    <a href="{{ route('login') }}" class="col-start-2 col-span-2 text-3xl text-center bg-gray-600 text-white h-60 w-60 py-24 rounded-full">ログイン</a>
                    <a href="{{ route('register') }}" class="col-start-10 col-span-2 text-3xl text-center bg-gray-600 text-white h-60 w-60 py-24 rounded-full">ユーザー登録</a>
                @endauth
            </div>
        @endif
    </body>
</html>
