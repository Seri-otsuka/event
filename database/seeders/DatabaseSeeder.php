<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'テストユーザー1',
        'text' => null,
        'email' => 'test1@gmail',
        'password' => bcrypt('password'),
        'profile_photo_path' => null,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => null,
        ]);
        
        
         DB::table('users')->insert([
        'name' => 'テストユーザー2',
        'text' => null,
        'email' => 'test2@gmail',
        'password' => bcrypt('password'),
        'profile_photo_path' => null,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => null,
        ]);
        
         DB::table('users')->insert([
        'name' => 'テストユーザー3',
        'text' => null,
        'email' => 'test3@gmail',
        'password' => bcrypt('password'),
        'profile_photo_path' => null,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => null,
        ]);
        
        DB::table('users')->insert([
        'name' => 'テストユーザー4',
        'text' => null,
        'email' => 'test4@gmail',
        'password' => bcrypt('password'),
        'profile_photo_path' => null,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        'deleted_at' => null,
        ]);
        
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
