<?php

namespace Database\Seeders;

use App\Models\ArticleAuthor;
use Illuminate\Database\Seeder;

class ArticleAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleAuthor::factory()->count(6)->create();
    }
}
