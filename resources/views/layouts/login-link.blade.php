<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ログイン</title>
</head>

<body>
    <div class="login-link">
        <a href="{{ route('login.index') }}">ログインページ</a>
    </div>
</body>

</html>
