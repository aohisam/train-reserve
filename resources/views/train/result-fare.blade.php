<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>合計金額</title>
</head>

<body>
    <h2>合計金額</h2>
    @php
        $adlutsNumber = $adultsNumber;
        $childrenNumber = $childrenNumber;
    @endphp
    @foreach ($route as $rout)
        @php
            $fare = $rout->adult_fare * $adlutsNumber + $rout->child_fare * $childrenNumber;
        @endphp
    @endforeach

    @foreach ($route as $rou)
        <p>大人料金：{{ $rou->adult_fare }} ✖️ {{ $adultsNumber }}人</p>
        <p>子供料金：{{ $rou->child_fare }} ✖️ {{ $childrenNumber }}人</p>
    @endforeach
    <p>合計金額：{{ $fare }}</p>
    <form action="/train/seating-chart" method="post">
        @csrf
        <button type="submit">座席を選択する</button>
    </form>
    @include('layouts.search-train-link')
    @include('layouts.logout')
</body>

</html>
