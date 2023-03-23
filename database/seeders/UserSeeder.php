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
        DB::table('users')->insert([
               [
                'name' => 'うえかり' ,
                'email' => 'user1@mail.com',
                'password' => Hash::make('password123'),
                'created_at' => Now(),
               ],
               [
                'name' => 'そえじま' ,
                'email' => 'user2@mail.com',
                'password' => Hash::make('password123'),
                'created_at' => Now(),
               ],
        ]);
    }
}
