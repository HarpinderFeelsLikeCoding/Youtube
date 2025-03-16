<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            'title' => 'Car From the Future',
            'thumbnail' => '/videos/Thumbnails/Auto.png',
            'video' => '/videos/Auto.mp4',
            'user' => 'Harpinder Singh',
            'views' => '34k views - 12 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Car in Race - FAST!!!',
            'thumbnail' => '/videos/Thumbnails/Car.png',
            'video' => '/videos/Car.mp4',
            'user' => 'Harpinder Singh',
            'views' => '89k views - 2 months ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Cool Red Car',
            'thumbnail' => '/videos/Thumbnails/Car1.png',
            'video' => '/videos/Car1.mp4',
            'user' => 'Harpinder Singh',
            'views' => '4k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Ship in the Ocean',
            'thumbnail' => '/videos/Thumbnails/ships.png',
            'video' => '/videos/ships.mp4',
            'user' => 'Harpinder Singh',
            'views' => '98k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Horse Being Free',
            'thumbnail' => '/videos/Thumbnails/horse.jpg',
            'video' => '/videos/horse.mp4',
            'user' => 'Harpinder Singh',
            'views' => '770k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Lions Yawning',
            'thumbnail' => '/videos/Thumbnails/lion.jpg',
            'video' => '/videos/lions.mp4',
            'user' => 'Harpinder Singh',
            'views' => '900k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Motorcross',
            'thumbnail' => '/videos/Thumbnails/motorcross.jpg',
            'video' => '/videos/motorcross.mp4',
            'user' => 'Harpinder Singh',
            'views' => '80k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Racing',
            'thumbnail' => '/videos/Thumbnails/racing.jpg',
            'video' => '/videos/racing.mp4',
            'user' => 'Harpinder Singh',
            'views' => '31k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
