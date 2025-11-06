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
        // Reservation::create([
        //     'name' => 'János3',
        //     'email' => 'janos3@example.com',
        //     'reservation_time' => '2025-12-01 08:48:00',
        //     'guests' => 5,
        //     'note' => 'Születésnapi vacsora',
        // ]);

        Reservation::factory()->count(10)->create();
    }
}
