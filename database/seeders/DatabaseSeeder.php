<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(admin::class);
        $this->call(external_db::class);
        $this->call(hospital::class);
        $this->call(inventory::class);
        $this->call(users::class);
        $this->call(vaccine_history::class);
        $this->call(vaccine_price::class);
    }
}
