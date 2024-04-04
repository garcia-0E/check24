<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tariff;
use Carbon\Carbon;

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for tariffs
        $tariffs = [
            [
                'name' => 'Tariff 1',
                'price' => 10.99,
                'valid_until' => Carbon::now()->addDays(30),
                'network' => 'Telekom',
            ],
            [
                'name' => 'Tariff 2',
                'price' => 20.50,
                'valid_until' => Carbon::now()->addDays(32),
                'network' => 'Vodafone',
            ],
            [
                'name' => 'Tariff 3',
                'price' => 8.55,
                'valid_until' => Carbon::now()->addDays(36),
                'network' => 'Telekom',
            ],
            [
                'name' => 'Tariff 4',
                'price' => 17.99,
                'valid_until' => Carbon::now()->addDays(39),
                'network' => 'Vodafone',
            ],
            [
                'name' => 'Tariff 5',
                'price' => 25.50,
                'valid_until' => Carbon::now()->addDays(45),
                'network' => 'Telekom',
            ],
            [
                'name' => 'Tariff 6',
                'price' => 21.50,
                'valid_until' => Carbon::now()->addDays(76),
                'network' => 'Vodafone',
            ],
            [
                'name' => 'Tariff 7',
                'price' => 12.99,
                'valid_until' => Carbon::now()->addDays(52),
                'network' => 'Telekom',
            ],
            [
                'name' => 'Tariff 8',
                'price' => 30.50,
                'valid_until' => Carbon::now()->addDays(75),
                'network' => 'Vodafone',
            ],
            [
                'name' => 'Tariff 9',
                'price' => 45.99,
                'valid_until' => Carbon::now()->addDays(12),
                'network' => 'Telekom',
            ],
            [
                'name' => 'Tariff 10',
                'price' => 1.99,
                'valid_until' => Carbon::now()->addDays(17),
                'network' => 'Vodafone',
            ],
            [
                'name' => 'Tariff 11',
                'price' => 0.99,
                'valid_until' => Carbon::now()->addDays(11),
                'network' => 'Telekom',
            ],
            [
                'name' => 'Tariff 12',
                'price' => 7.50,
                'valid_until' => Carbon::now()->addDays(26),
                'network' => 'Vodafone',
            ],
        ];

        // Insert the sample data into the tariffs table
        foreach ($tariffs as $tariffData) {
            Tariff::create($tariffData);
        }
    }
}
