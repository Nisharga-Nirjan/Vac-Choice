<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vaccine_price extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine_price')->insert([
            ['vac_name' => 'AstraZeneca(COVID)', 'price' => 1125],
            ['vac_name' => 'Hepavax B(Hepatitis B)', 'price' => 700],
            ['vac_name' => 'Influvax(Influenza)', 'price' => 900],
            ['vac_name' => 'Varilrix(Chicken Pox)', 'price' => 8300],
            ['vac_name' => 'Vaxitet(Tetanus)', 'price' => 300],
            ['vac_name' => 'Vaxphoid(Typhoid)', 'price' => 500],
        ]);
    }
}
