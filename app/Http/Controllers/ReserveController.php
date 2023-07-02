<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function reserve()
    {
        $train = Session::get('train');
        $trainId = $train->first()
            ->id;
        $reserveStatuses = Reserve::where('train_id', $trainId)
            ->get();
        return view('train.seating-chart', compact('reserveStatuses'));
    }

    public function payment()
    {
        return view('train.payment');
    }
}
