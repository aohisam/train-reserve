<?php

namespace App\Console\Commands;

use App\Models\Reserve;
use App\Models\Seating;
use Illuminate\Console\Command;

class CreateSeatsReserveRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seatsreserve:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $seatings = Seating::all();
        foreach ($seatings as $seating) {
            Reserve::create([
                'reserved' => false,
                'seating_chart_id' => $seating->id,
                'user_id' => null,
                'train_id' => $seating->train_id,
            ]);
        }
    }
}
