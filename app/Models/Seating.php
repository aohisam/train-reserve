<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seating extends Model
{
    use HasFactory;

    protected $table = 'seating-charts';
    protected $fillable = ['train_id', 'seat_number'];
}
