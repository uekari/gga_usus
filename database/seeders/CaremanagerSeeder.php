<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CaremanagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('caremanagers')->insert([
               [
                'caremanager_name' => '吉田凛' ,
                'belong' => 'A事業所' ,
                'address' => '福岡市',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'caremanager_name' => '近藤蓮' ,
                'belong' => 'B事業所' ,
                'address' => '北九州市',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
        ]);
    }
}
