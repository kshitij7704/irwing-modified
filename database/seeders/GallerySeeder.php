<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GallerySeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('galleries')->insert([
            [
                'type' => 'image',
                'src' => 'assets/img/gallery/G-31748015061498.jpg',
                'heading' => 'Enterprise AI Agent',
                'desc' => 'Transforming business operations with advanced AI capabilities.',
                'poster' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/gallery/G-41742359114238.jpg',
                'heading' => 'Customer Success',
                'desc' => 'Delivering exceptional customer experiences through automation.',
                'poster' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'video',
                'src' => 'assets/img/gallery/Ai LifeBot 01.mp4',
                'heading' => 'AI LifeBot Demo',
                'desc' => 'Watch our AI platform in action - see how it transforms customer interactions.',
                'poster' => 'assets/img/gallery/G-1RKS01594.JPG',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/gallery/G-2RKS01651.JPG',
                'heading' => 'AI LifeBot Showcase',
                'desc' => 'Showcasing the innovative technology behind our AI LifeBot solution.',
                'poster' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/gallery/G-51748458938464.jpg',
                'heading' => 'AI-Driven Insights',
                'desc' => 'Unlocking data-driven decision making for enterprises.',
                'poster' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'image',
                'src' => 'assets/img/gallery/G-61748508240335.jpg',
                'heading' => 'Seamless Integration',
                'desc' => 'Easily integrate AI with your existing workflows.',
                'poster' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}