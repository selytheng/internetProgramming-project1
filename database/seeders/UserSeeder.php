<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Saro Sereyvichea',
                'email' => 'vichea@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'image' => 'image.jpg',
                'role_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Se Lytheng',
                'email' => 'lytheng@gmail.com',
                'email_verified_at' => now(),
                'password' =>  Hash::make('12345678'),
                'image' => 'image.jpg',
                'role_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pom Mouylang',
                'email' => 'mouylang@gmail.com',
                'email_verified_at' => now(),
                'password' =>  Hash::make('12345678'),
                'image' => 'image.jpg',
                'role_id' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pang Lihour',
                'email' => 'lihour@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'image' => 'image.jpg',
                'role_id' => 2,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
