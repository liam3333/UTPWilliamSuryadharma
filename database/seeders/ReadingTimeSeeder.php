<?php

namespace Database\Seeders;

use App\Models\ReadingTime;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReadingTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReadingTime::create([
            "reading_time" => "Quick Reads"
        ]);
        ReadingTime::create([
            "reading_time" => "Medium Reads"
        ]);
        ReadingTime::create([
            "reading_time" => "Long Reads"
        ]);
    }
}
