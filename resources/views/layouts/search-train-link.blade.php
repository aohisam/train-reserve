<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>新幹線検索ページリンク</title>
</head>

<body>
    <div class="search-train-link">
        <a href="{{ route('train.index') }}">新幹線検索ページ</a>
    </div>
</body>

</html>
