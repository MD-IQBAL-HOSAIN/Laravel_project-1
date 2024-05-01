<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i <10 ; $i++) { 
            $s = Str::random(10);
        DB::table('categories')->insert([
            // 'id' => '',
            'name' => $s,
            'slug' => $s,
            'description' => $s,
            'image' => 'img.png',
            'status' => '1',
            'created_at' => now(),
        ]);
        }       
    }
}
