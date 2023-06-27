<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ログイン</title>
</head>

<body>
    <div id="form-wrapper">
        <h2>ログイン</h2>

        <form action="/users" method="post">
            @csrf

            <div class="form-class form-login-email">
                <label class="input-label-class">メールアドレス</label>
                <input type="email" name="email" placeholder="" />
            </div>

            <div class="form-class form-login-password">
                <label class="input-label-class">パスワード</label>
                <input type="password" name="password" placeholder="" />
            </div>

            <button type="submit">ログイン</button>

        </form>
    </div>
</body>

</html>
