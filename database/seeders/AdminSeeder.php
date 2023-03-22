<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
               [
                'name' => 'admin1' ,
                'email' => 'admin1@mail.com',
                'password' => Hash::make('password123'),
                'created_at' => Now(),
               ],
               [
                'name' => 'admin2' ,
                'email' => 'admin2@mail.com',
                'password' => Hash::make('password123'),
                'created_at' => Now(),
               ],
        ]);
    }
}
