<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>会員登録</title>
</head>

<body>
    <div id="form-wrapper">
        <h2>会員登録</h2>

        <form action="/users" method="post">
            @csrf

            <div class="form-class form-register-name">
                <label class="input-label-class">お名前</label>
                <input type="text" name="register-name" />
            </div>

            <div class="form-class form-register-email">
                <label class="input-label-class">メールアドレス</label>
                <input type="email" name="register-email" placeholder="" />
            </div>

            <div class="form-class form-register-password">
                <label class="input-label-class">パスワード</label>
                <input type="password" name="register-password" placeholder="" />
            </div>

            <button type="submit">登録</button>

        </form>
    </div>
</body>

</html>
