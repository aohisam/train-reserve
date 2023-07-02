<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>座席指定</title>
</head>

<body>
    <h2>座席指定</h2>
    @foreach ($reserveStatuses as $reserveStatus)
        @if (!$reserveStatus->reserved)
            <form method="post" action="/train/payment">
                @csrf
                <button type="submit">{{ $reserveStatus->seating_chart_id }}</button>
            </form>
        @else
            {{ $reserveStatus->seating_chart_id }}
        @endif
    @endforeach
    @include('layouts.logout')
    @include('layouts.search-train-link')
</body>

</html>
