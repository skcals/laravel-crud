<?php

namespace Database\Seeders;

use App\Models\Tutorial;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 500; $i++) :
            Tutorial::create([
                'title' => Str::random(10) . ' ' . Str::random(5) . ' ' . Str::random(6),
                'tags' => Str::random(5) . ' ' . Str::random(5) . ' ' . Str::random(4),
                'price' => rand(10, 100),
                'level' => rand(1, 3)
            ]);
        endfor;
    }
}
