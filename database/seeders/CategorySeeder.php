<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            'name' => 'ANIME',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('categories')->insert([
            'name' => 'K-POP',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('categories')->insert([
            'name' => 'GAME',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
    }
}
