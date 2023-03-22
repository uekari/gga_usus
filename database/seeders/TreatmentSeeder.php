<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatments')->insert([
               [
                'client_id' => '1' ,
                'item' => '吸引' ,
                'content' => '手順が入ります。手順が入ります。手順が入ります。' ,
                'point' => '本人が必要ないときは無理にしなくて良い。SpO2の値を確認しながらなるべく短い時間でする。',
                'created_at' => Now(),
               ],
               [
                'client_id' => '1' ,
                'item' => '投薬' ,
                'content' => '手順が入ります。手順が入ります。手順が入ります。' ,
                'point' => '痛みに応じてアセアミノフェンを使用。NRS7以上の場合はオプソも検討する。',
                'created_at' => Now(),
               ],
               [
                'client_id' => '2' ,
                'item' => '吸引' ,
                'content' => '手順が入ります。手順が入ります。手順が入ります。' ,
                'point' => 'SpO2の値を確認しながらなるべく短い時間でする。',
                'created_at' => Now(),
               ],
        ]);
    }
}
