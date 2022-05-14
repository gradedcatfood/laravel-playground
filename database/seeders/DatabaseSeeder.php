<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'demo@example.com',
         ]);
    }
}
