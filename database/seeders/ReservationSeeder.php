<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'name' => 'János',
            'email' => 'janos@example.com',
            'reservation_time' => '2025-12-01 08:48:00',
            'guests' => 4,
            'note' => 'Születésnapi vacsora',
        ]);
    }
}
