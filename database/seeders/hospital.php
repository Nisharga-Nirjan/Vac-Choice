<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class hospital extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hospital')->insert([
            ['h_id' => 100, 'name' => 'Square Hospital', 'address' => '18/F, Bir Uttam Qazi Nuruzzaman  Sarak, West Panthapath'],
            ['h_id' => 201, 'name' => 'Evercare Hospital', 'address' => 'Plot: 81, Block: E, Bashundhara R/A, Dhaka 1229, Bangladesh'],
            ['h_id' => 303, 'name' => 'United Hospital Limited', 'address' => 'Plot: 15, Road: 71, Gulshan, Dhaka-1212, Bangladesh'],
            ['h_id' => 467, 'name' => 'Labaid Specialized Hospital', 'address' => 'House: 06, Road: 04, Dhanmondi, Dhaka- 1205, Bangladesh'],
            ['h_id' => 499, 'name' => 'BIRDEM General Hospital', 'address' => 'Shahbag Square, 122 Kazi Nazrul Islam Ave, Dhaka- 1000'],
        ]);
    }
}
