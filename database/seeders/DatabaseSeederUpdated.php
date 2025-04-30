<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeederUpdated extends Seeder
{
    public function run(): void
    {
        $this->call([
            FinanceSeeder::class,
        ]);
    }
}