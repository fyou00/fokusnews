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
        'name' => 'Pendidikan',
        'slug' => 'pendidikan',
      ]);

      Category::create([
        'name' => 'Ekonomi',
        'slug' => 'ekonomi',
      ]);

      Category::create([
        'name' => 'Olahraga',
        'slug' => 'olahraga',
      ]);

      Category::create([
        'name' => 'Wisata',
        'slug' => 'wisata',
      ]);

      Category::create([
        'name' => 'Seleb',
        'slug' => 'seleb',
      ]);
    }
}
