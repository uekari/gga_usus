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
                'title' => '吸引' ,
                'content' => 'リスクの手順です',
                'point' => '10秒以内で実施する。',
                'created_at' => Now(),
               ],
               [
                'client_id' => '1' ,
                'title' => '投薬' ,
                'content' => 'リスクの手順です',
                'point' => '痛みに応じてオプソ投与可。',
                'created_at' => Now(),
               ],
               [
                'client_id' => '2' ,
                'title' => '経管栄養' ,
                'content' => 'リスクの手順です',
                'point' => '嘔吐しやすいのでゆっくり投与する。',
                'created_at' => Now(),
               ],
               [
                'client_id' => '2' ,
                'title' => '投薬' ,
                'content' => 'リスクの手順です',
                'point' => '不安を感じやすい。不安時はソラナックス投与を検討する。',
                'created_at' => Now(),
               ],
        ]);
    }
}
