<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>検索結果</title>
</head>

<body>
    <h2>検索結果</h2>
    <div class="train-result-area">
        <p>{{ $leaveStation }}<span style="font-size:10px">から</span>{{ $arrivalStation }}</p>

        @if ($routes && count($routes) > 0)
            @foreach ($routes as $route)
                <div class="time-info">
                    <p>{{ $route->departure_time }}<span>発</span></p>
                    <span>↓</span>
                    <p>{{ $route->arrival_time }}<span>着</span></p>
                    <form action="/train/result-fare" method="post">
                        @csrf
                        <button type="submit">この経路を選択</button>
                    </form>
                </div>
            @endforeach
        @else
            <div class="error-message">
                <p>該当するデータはありません</p>
            </div>
        @endif
    </div>
    @include('layouts.search-train-link')
</body>

</html>
