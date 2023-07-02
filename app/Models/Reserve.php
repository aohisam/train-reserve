<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table = 'seat_reservations';
    protected $fillable = ['reserved', 'user_id', 'train_id', 'seating_chart_id'];
    use HasFactory;
}
