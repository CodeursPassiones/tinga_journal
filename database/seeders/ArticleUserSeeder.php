<?php

namespace Database\Seeders;

use App\Models\ArticleUser;
use Illuminate\Database\Seeder;

class ArticleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleUser::factory()->count(6)->create();
    }
}
