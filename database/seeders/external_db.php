<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class external_db extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('external_db')->insert([
            ['nid' => '0987654321'],
            ['nid' => '1234567890'],
            ['nid' => '4664778315'],
            ['nid' => '8014532769'],
        ]);
    }
}
