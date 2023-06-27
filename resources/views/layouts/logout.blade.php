<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ログイン</title>
</head>

<body>
    <div id="form-wrapper">
        <form action="/users/logout" method="post">
            @csrf
            <button type="submit">ログアウト</button>
        </form>
    </div>
</body>

</html>
