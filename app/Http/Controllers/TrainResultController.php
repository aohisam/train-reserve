<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainResultController extends Controller
{
    public function trainResult(Request $request)
    {
        $date = $request->input('01');
        $hour = $request->input('02');
        $minute = $request->input('03');
        $leaveOrArrival = $request->input('04');
        $leaveStation = $request->input('05');
        $arrivalStation = $request->input('06');
        $adultsNumber = $request->input('07');
        $childrenNumber = $request->input('08');
        if (true
            /*
        バリデーション処理を記述
        */) {
            $routesQuery = Routes::query();
            /*曜日の取得*/
            $carbonDate = Carbon::createFromFormat('Y-m-d', $date);
            $dayOfWeek = $carbonDate->format('l');
            $timeRange = ($hour * 3600) + ($minute * 60);

            /*検索結果に近い5件のデータをデータベースから取得*/
            $routesQuery->where('day_of_week', $dayOfWeek)
                ->where('departure_station', $leaveStation)
                ->where('arrival_station', $arrivalStation);
            if ($leaveOrArrival == "leave") {
                $routesQuery->whereRaw("ABS(TIME_TO_SEC(departure_time) - $timeRange) <= 10000000")
                    ->orderByRaw("ABS(TIME_TO_SEC(departure_time) - $timeRange)");
            } else {
                $routesQuery->whereRaw("ABS(TIME_TO_SEC(arrival_time) - $timeRange) <= 3600")
                    ->orderByRaw("ABS(TIME_TO_SEC(arrival_time) - $timeRange) <= 3600");
            }
            $routes = $routesQuery->get();
            return view('train.result', compact('routes', 'leaveStation', 'arrivalStation'));
        }
    }

    public function trainResultFare(Request $request)
    {
        
        return view('train.result-fare');
    }
}
