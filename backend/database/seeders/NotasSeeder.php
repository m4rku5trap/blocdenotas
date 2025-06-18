<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Nota::factory()->count(20)->create();
    }

}
