<?php

namespace Mediabroker\Core\Database\Seeds;

use Illuminate\Database\Seeder;
use Mediabroker\Core\Models\News;

class NewsTableSeeder extends Seeder
{
    public function run(): void
    {
        factory(News::class, 30)->create();
    }
}
