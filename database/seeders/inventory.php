<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class inventory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventory')->insert([
            ['comb_id' => 1, 'h_id' => 100, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-29', 'quantity' =>  98],
            ['comb_id' => 2, 'h_id' => 100, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-30', 'quantity' =>  99],
            ['comb_id' => 3, 'h_id' => 100, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-31', 'quantity' =>  99],
            ['comb_id' => 4, 'h_id' => 100, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-29', 'quantity' =>  100],
            ['comb_id' => 5, 'h_id' => 100, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-30', 'quantity' =>  100],
            ['comb_id' => 6, 'h_id' => 100, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-31', 'quantity' =>  100],
            ['comb_id' => 17, 'h_id' => 201, 'vac_name' => 'Hepavax B(Hepatitis B)', 'date' => '2022-08-29', 'quantity' =>  500],
            ['comb_id' => 18, 'h_id' => 201, 'vac_name' => 'Hepavax B(Hepatitis B)', 'date' => '2022-08-30', 'quantity' =>  498],
            ['comb_id' => 19, 'h_id' => 201, 'vac_name' => 'Hepavax B(Hepatitis B)', 'date' => '2022-08-31', 'quantity' =>  500],
            ['comb_id' => 20, 'h_id' => 201, 'vac_name' => 'Varilrix(Chicken Pox)', 'date' => '2022-08-29', 'quantity' =>  98],
            ['comb_id' => 21, 'h_id' => 201, 'vac_name' => 'Varilrix(Chicken Pox)', 'date' => '2022-08-30', 'quantity' =>  100],
            ['comb_id' => 22, 'h_id' => 201, 'vac_name' => 'Varilrix(Chicken Pox)', 'date' => '2022-08-31', 'quantity' =>  100],
            ['comb_id' => 23, 'h_id' => 303, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-29', 'quantity' =>  499],
            ['comb_id' => 24, 'h_id' => 303, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-30', 'quantity' =>  500],
            ['comb_id' => 25, 'h_id' => 303, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-31', 'quantity' =>  500],
            ['comb_id' => 26, 'h_id' => 303, 'vac_name' => 'Vaxitet(Tetanus)', 'date' => '2022-08-29', 'quantity' =>  499],
            ['comb_id' => 27, 'h_id' => 303, 'vac_name' => 'Vaxitet(Tetanus)', 'date' => '2022-08-30', 'quantity' =>  500],
            ['comb_id' => 28, 'h_id' => 303, 'vac_name' => 'Vaxitet(Tetanus)', 'date' => '2022-08-31', 'quantity' =>  499],
            ['comb_id' => 29, 'h_id' => 467, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-29', 'quantity' =>  100],
            ['comb_id' => 30, 'h_id' => 467, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-30', 'quantity' =>  99],
            ['comb_id' => 31, 'h_id' => 467, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-31', 'quantity' =>  100],
            ['comb_id' => 32, 'h_id' => 467, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-29', 'quantity' =>  100],
            ['comb_id' => 33, 'h_id' => 467, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-30', 'quantity' =>  100],
            ['comb_id' => 34, 'h_id' => 467, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-31', 'quantity' =>  100],
            ['comb_id' => 35, 'h_id' => 467, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-29', 'quantity' =>  500],
            ['comb_id' => 36, 'h_id' => 467, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-30', 'quantity' =>  500],
            ['comb_id' => 37, 'h_id' => 467, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-31', 'quantity' =>  500],
            ['comb_id' => 38, 'h_id' => 499, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-29', 'quantity' =>  99],
            ['comb_id' => 39, 'h_id' => 499, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-30', 'quantity' =>  100],
            ['comb_id' => 40, 'h_id' => 499, 'vac_name' => 'AstraZeneca(COVID)', 'date' => '2022-08-31', 'quantity' =>  100],
            ['comb_id' => 41, 'h_id' => 499, 'vac_name' => 'Hepavax B(Hepatitis B)', 'date' => '2022-08-29', 'quantity' =>  500],
            ['comb_id' => 42, 'h_id' => 499, 'vac_name' => 'Hepavax B(Hepatitis B)', 'date' => '2022-08-30', 'quantity' =>  500],
            ['comb_id' => 43, 'h_id' => 499, 'vac_name' => 'Hepavax B(Hepatitis B)', 'date' => '2022-08-31', 'quantity' =>  499],
            ['comb_id' => 44, 'h_id' => 499, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-29', 'quantity' =>  100],
            ['comb_id' => 45, 'h_id' => 499, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-30', 'quantity' =>  100],
            ['comb_id' => 46, 'h_id' => 499, 'vac_name' => 'Influvax(Influenza)', 'date' => '2022-08-31', 'quantity' =>  100],
            ['comb_id' => 47, 'h_id' => 499, 'vac_name' => 'Varilrix(Chicken Pox)', 'date' => '2022-08-29', 'quantity' =>  100],
            ['comb_id' => 48, 'h_id' => 499, 'vac_name' => 'Varilrix(Chicken Pox)', 'date' => '2022-08-30', 'quantity' =>  100],
            ['comb_id' => 49, 'h_id' => 499, 'vac_name' => 'Varilrix(Chicken Pox)', 'date' => '2022-08-31', 'quantity' =>  100],
            ['comb_id' => 50, 'h_id' => 499, 'vac_name' => 'Vaxitet(Tetanus)', 'date' => '2022-08-29', 'quantity' =>  500],
            ['comb_id' => 51, 'h_id' => 499, 'vac_name' => 'Vaxitet(Tetanus)', 'date' => '2022-08-30', 'quantity' =>  500],
            ['comb_id' => 52, 'h_id' => 499, 'vac_name' => 'Vaxitet(Tetanus)', 'date' => '2022-08-31', 'quantity' =>  500],
            ['comb_id' => 53, 'h_id' => 499, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-29', 'quantity' =>  500],
            ['comb_id' => 54, 'h_id' => 499, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-30', 'quantity' =>  500],
            ['comb_id' => 55, 'h_id' => 499, 'vac_name' => 'Vaxphoid(Typhoid)', 'date' => '2022-08-31', 'quantity' =>  499],
        ]);
    }
}
