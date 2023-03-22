<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('times')->insert([
               [
                'schedule_id' => '1' ,
                'time' => '11:11' ,
                'content' => '家に訪問' ,
                'is_move' => '1',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '12:11' ,
                'content' => '家を出る' ,
                'is_move' => '1',
                'created_at' => Now(),
               ],

        ]);
    }
}
