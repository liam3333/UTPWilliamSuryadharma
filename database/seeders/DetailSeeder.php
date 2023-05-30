<?php

namespace Database\Seeders;

use App\Models\Detail;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i < 13; $i++) {
            Detail::create([
                "title" => $faker->sentence(10),
                "subtitle" => $faker->sentence(2),
                "like_count" => $faker->numberBetween(0, 100),
                "description" => $faker->paragraph(),
                "post_body" => $faker->paragraph(35),
                "author" => $faker->name(),
                "post_date" => $faker->dateTime(),
                "reading_time_id" => mt_rand(1,3),
                "post_image" => $faker->imageUrl(720, 720, 'animals', true, 'dogs', true, 'jpg')
            ]);
        }
    }
}
