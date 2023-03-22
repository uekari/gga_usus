<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('risks')->insert([
               [
                'time_id' => '1' ,
                'title' => 'リスクタイトルが入ります' ,
                'content' => 'リスク内容が入ります' ,
                'created_at' => Now(),
               ],
                [
                'time_id' => '2' ,
                'title' => 'リスクタイトルが入ります' ,
                'content' => 'リスク内容が入ります' ,
                'created_at' => Now(),
               ],

        ]);
    }
}
