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
        // Category::factory(3)->create();
        Category::create([
            'name' => 'web Design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Machine Learing',
            'slug' => 'machine-learning',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Data Analytic',
            'slug' => 'data-analytic',
            'color' => 'yellow'
        ]);
    }
}
