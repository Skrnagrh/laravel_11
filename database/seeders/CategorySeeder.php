<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Ui Ux',
            'slug' => 'ui-ux',
            'color' => 'green'
        ]);

    }
}
