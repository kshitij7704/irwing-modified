<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleryImages = [
            [
                'src' => 'assets/img/Explore Enterprise AI Agent/image1.jpeg',
                'heading' => 'Enterprise AI Agent',
                'desc' => 'Transforming business operations with advanced AI capabilities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'src' => 'assets/img/Explore Enterprise AI Agent/image2.jpeg',
                'heading' => 'Customer Success',
                'desc' => 'Delivering exceptional customer experiences through automation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'src' => 'assets/img/Explore Enterprise AI Agent/image10.png',
                'heading' => 'AI-Driven Insights',
                'desc' => 'Unlocking data-driven decision making for enterprises.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'src' => 'assets/img/Explore Enterprise AI Agent/image3.jpeg',
                'heading' => 'Seamless Integration',
                'desc' => 'Easily integrate AI with your existing workflows.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'src' => 'assets/img/Explore Enterprise AI Agent/image4.png',
                'heading' => 'Proactive Support',
                'desc' => 'AI agents that anticipate and resolve issues before they arise.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('gallery_images')->insert($galleryImages);
    }
}
