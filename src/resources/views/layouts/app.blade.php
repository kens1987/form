<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
</head>
<body>
        <header class="header">
        <div class="header__title">
            <a class="header__logo" href="/">お問合せフォーム</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>