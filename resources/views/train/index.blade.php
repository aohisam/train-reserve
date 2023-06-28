<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>新幹線検索ページ</title>

    <style>
        .select-time-area {
            display: flex;
        }
    </style>

</head>

<body>
    <h2>新幹線検索ページ</h2>
    @include('layouts.logout')
    @include('layouts.dashboard-link')

    <div class="search-train">
        <div class="select-date-area">
            <select name="01" class="select-date">
                {{-- javascriptで一週間先までの optionタグを作成 --}}
            </select>
        </div>

        <div class="select-time-area">
            <select name="02" class="select-hour">
            </select>
            <select name="03" class="select-miniute">
            </select>
            <select name="04" class="leave-or-arrival">
                <option value="1" selected>出発</option>
                <option value="2">到着</option>
            </select>
        </div>

        <div class="adults-or-children">
            <select name="05" class="select-adults">
                <option value="1">おとな1名</option>
                <option value="2">おとな2名</option>
                <option value="3">おとな3名</option>
                <option value="4">おとな4名</option>
                <option value="5">おとな5名</option>
                <option value="6">おとな6名</option>
            </select>
            <select name="05" class="select-children">
                <option value="1">こども1名</option>
                <option value="2">こども2名</option>
                <option value="3">こども3名</option>
                <option value="4">こども4名</option>
                <option value="5">こども5名</option>
                <option value="6">こども6名</option>
            </select>
        </div>

    </div>
</body>

</html>
