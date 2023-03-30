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
                'time' => '09:10' ,
                'content' => '家に訪問' ,
                'is_move' => '0',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => 'リスク1の画像が入る',
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => null,
                'risk_content3' => null,
                'treatment_title1' => '吸引',
                'treatment_title2' => '経管栄養',
                'treatment_title3' => '投薬',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '09:40' ,
                'content' => '家を出る' ,
                'is_move' => '1',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => 'リスク1の画像が入る',
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'treatment_title1' => '投薬',
                'treatment_title2' => '点眼',
                'treatment_title3' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '09:30' ,
                'content' => '電車に乗る' ,
                'is_move' => '1',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => 'リスク1の画像が入る',
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'treatment_title1' => '摘便',
                'treatment_title2' => 'SpO2確認',
                'treatment_title3' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '10:30' ,
                'content' => '乗り換え' ,
                'is_move' => '0',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => 'リスク1の画像が入る',
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'treatment_title1' => '投薬',
                'treatment_title2' => '点眼',
                'treatment_title3' => null,
                'created_at' => Now(),
               ],
        ]);
    }
}
