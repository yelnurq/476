<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tag::create(['name' => 'Оқушыларға']);
        Tag::create(['name' => 'Мұғалімдерге']);
        Tag::create(['name' => 'Ата-аналарға']);
        // Добавьте другие категории по вашему усмотрению
    }
}
