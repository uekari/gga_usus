<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
               [
                'user_id' => '1' ,
                'client_id' => '1' ,
                'title' => '春の花見旅行' ,
                'date' => '2023/01/01 11:11:11',
                'created_at' => Now(),
               ],
               [
                'user_id' => '2' ,
                'client_id' => '2' ,
                'title' => '梨狩り旅行' ,
                'date' => '2023/04/12 10:11:11',
                'created_at' => Now(),
               ],
               [
                'user_id' => '3' ,
                'client_id' => '3' ,
                'title' => 'ちょっとそこまで植物園日帰り旅行' ,
                'date' => '2023/06/16 10:10:10',
                'created_at' => Now(),
               ],
               [
                'user_id' => '4' ,
                'client_id' => '4' ,
                'title' => '熊本里帰り旅行' ,
                'date' => '2023/07/20 10:10:10',
                'created_at' => Now(),
               ],

        ]);
    }
}
