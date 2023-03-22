<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
               [
                'client_name' => '山田' ,
                'client_name2' => '太郎' ,
                'age' => '80' ,
                'desease' => '脳梗塞',
                'carelevel' => '要介護5',
                'created_at' => Now(),
               ],
               [
                'client_name' => '佐藤' ,
                'client_name2' => '花子' ,
                'age' => '70' ,
                'desease' => 'ALS',
                'carelevel' => '要介護5',
                'created_at' => Now(),
               ],
        ]);
    }
}
