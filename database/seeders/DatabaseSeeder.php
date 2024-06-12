<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            usersSeeder::class,
            criteriaSeeder::class,
            alternativesSeeder::class,
            grade_alternatives_criteria::class,
        ]);
    }
}
