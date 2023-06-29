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
                {{-- javascriptで時間の optionタグを作成 --}}
            </select>
            <select name="03" class="select-minute">
                {{-- javascriptで分の optionタグを作成 --}}
            </select>
            <select name="04" class="leave-or-arrival">
                <option value="1" selected>出発</option>
                <option value="2">到着</option>
            </select>
        </div>

        <div class="select-place-area">
            <select name="05" class="select-leave-station">
                {{-- PHP&javascriptで出発駅の optionタグを作成 --}}
            </select>
            <select name="06" class="select-leave-station">
                {{-- PHP&javascriptで到着駅の optionタグを作成 --}}
            </select>
        </div>

        <div class="adults-or-children">
            <select name="07" class="select-adults">
                <option value="1">おとな1名</option>
                <option value="2">おとな2名</option>
                <option value="3">おとな3名</option>
                <option value="4">おとな4名</option>
                <option value="5">おとな5名</option>
                <option value="6">おとな6名</option>
            </select>
            <select name="08" class="select-children">
                <option value="1">こども1名</option>
                <option value="2">こども2名</option>
                <option value="3">こども3名</option>
                <option value="4">こども4名</option>
                <option value="5">こども5名</option>
                <option value="6">こども6名</option>
            </select>
        </div>

    </div>

    {{-- 日付取得 --}}
    <script>
        // select要素を取得
        const selectDate = document.querySelector('.select-date');

        // 本日の日付を取得
        const today = new Date();

        // 一週間先までの日付を生成してオプションとして追加
        for (let i = 0; i < 7; i++) {
            const date = new Date();
            date.setDate(today.getDate() + i);

            const option = document.createElement('option');
            option.value = formatDate(date);
            option.textContent = formatDateWithDayOfWeek(date);

            // 本日の日付をデフォルトで選択状態にする
            if (i === 0) {
                option.selected = true;
            }

            selectDate.appendChild(option);
        }

        // 日付を指定のフォーマットに変換する関数
        function formatDate(date) {
            const year = date.getFullYear();
            const month = ('0' + (date.getMonth() + 1)).slice(-2);
            const day = ('0' + date.getDate()).slice(-2);
            return `${year}-${month}-${day}`;
        }

        // 日付と曜日を指定のフォーマットに変換する関数
        function formatDateWithDayOfWeek(date) {
            const year = date.getFullYear();
            const month = date.getMonth() + 1;
            const day = date.getDate();
            const dayOfWeek = ['日', '月', '火', '水', '木', '金', '土'][date.getDay()];
            return `${month}月${day}日(${dayOfWeek})`;
        }
    </script>


    {{-- 時間取得 --}}
    <script>
        // select要素を取得
        const selectHour = document.querySelector('.select-hour');
        const selectMinute = document.querySelector('.select-minute');

        // 現在の時刻を取得
        const now = new Date();
        const currentHour = now.getHours();
        const currentMinute = now.getMinutes();

        // 時間のオプションを生成して追加
        for (let i = 0; i <= 23; i++) {
            const option = document.createElement('option');
            option.value = i.toString().padStart(2, '0');
            option.textContent = i.toString().padStart(2, '0');

            // デフォルトで現在の時刻に最も近い時間を選択
            if (i === currentHour) {
                option.selected = true;
            }

            selectHour.appendChild(option);
        }

        // 分のオプションを生成して追加
        for (let i = 0; i <= 59; i += 5) {
            if (currentMinute < i) {
                const option = document.createElement('option');
                option.value = i.toString().padStart(2, '0');
                option.textContent = i.toString().padStart(2, '0');
                selectMinute.appendChild(option);
            }
        }

        // 現在の時刻に最も近い分をデフォルトで選択
        if (selectMinute.options.length > 0) {
            selectMinute.options[0].selected = true;
        }
    </script>


</body>

</html>
