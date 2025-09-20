<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;

class WorksTableSeeder extends Seeder
{
    public function run(): void
    {
        Work::insert([
            [
                'title' => 'Design 1',
                'description' => 'デザイン作品1の説明',
                'image' => 'design1.jpg', // public/images/design1.jpg
                'type' => 'design',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Site 1',
                'description' => 'Webサイト1の説明',
                'image' => 'web1.jpg', // public/images/web1.jpg
                'url' => 'https://example.com',
                'type' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
