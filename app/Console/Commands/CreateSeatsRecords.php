<?php

namespace App\Console\Commands;

use App\Models\Seating;
use App\Models\Train;
use Illuminate\Console\Command;

class CreateSeatsRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seats:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create seat records for each train';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $trains = Train::all();

        foreach ($trains as $train) {
            for ($seatNumber = 1; $seatNumber <= 100; $seatNumber++) {
                Seating::create([
                    'train_id' => $train->id,
                    'seat_number' => $seatNumber,
                ]);
            }
        }

        $this->info('Seat records created successfully');
    }
}
