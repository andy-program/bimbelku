<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            ['name' => 'IPA', 'description' => 'Ilmu Pengetahuan Alam'],
            ['name' => 'IPS', 'description' => 'Ilmu Pengetahuan Sosial'],
        ];

        DB::table('categories')->insert($categories);
    }
}
