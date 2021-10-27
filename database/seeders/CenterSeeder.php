<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("centers")->insert([
            [
                'district_id' => 1,
                'name' => "kurmitola general hospital",
                'address' => "Khilkhet",
                'per_day_limit' => 1500
            ],
            [
                'district_id' => 11,
                'name' => "Narayangonj general hospital",
                'address' => "Narayangonj",
                'per_day_limit' => 1200
            ],
            [
                'district_id' => 10,
                'name' => "Mymensingh general hospital",
                'address' => "Mymensingh",
                'per_day_limit' => 1500
            ],
            [
                'district_id' => 17,
                'name' => "Tangail general hospital",
                'address' => "Tangail",
                'per_day_limit' => 300
            ],
            [
                'district_id' => 12,
                'name' => "Narsingdi general hospital",
                'address' => "Narsingdi",
                'per_day_limit' => 800
            ],
            [
                'district_id' => 6,
                'name' => "Kishoreganj general hospital",
                'address' => "Kishoreganj",
                'per_day_limit' => 1500
            ]
        ]);
    }
}
