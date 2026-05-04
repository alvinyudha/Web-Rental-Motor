<?php

namespace Database\Seeders;

use App\Models\VehicleBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VehicleBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicle_brands')->insert([
            [
                'name' => 'Yamaha',
            ],
            [
                'name' => 'Honda',
            ],
            [
                'name' => 'Suzuki',
            ],
            [
                'name' => 'Kawasaki',
            ],
        ]);
    }
}
