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
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '09:40' ,
                'content' => '家を出る' ,
                'url' => null,
                'is_move' => '0',//0移動あり
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'created_at' => Now(),
               ],
[
                'schedule_id' => '1' ,
                'time' => '10:00' ,
                'content' => 'IC到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',//1移動なし
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '11:30' ,
                'content' => '現地到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '12:00' ,
                'content' => 'レストランで休憩' ,
                  'url' => null,
                'is_move' => '1',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '12:40' ,
                'content' => '梨狩り' ,
                  'url' => null,
                'is_move' => '1',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '1' ,
                'time' => '14:00' ,
                'content' => '出発' ,
                  'url' => null,
                'is_move' => '0',
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '1' ,
                'time' => '15:00' ,
                'content' => '家到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '09:30' ,
                'content' => '電車に乗る' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '0',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '10:30' ,
                'content' => '乗り換え' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '0',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                 'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '11:30' ,
                'content' => '現地到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
 'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '14:30' ,
                'content' => '家到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '09:10' ,
                'content' => '家に訪問' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '09:40' ,
                'content' => '家を出る' ,
                  'url' => null,
                'is_move' => '0',//1移動あり
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '10:00' ,
                'content' => 'IC到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',//1移動なし
                'risk_title1' => 'リスク1のタイトルが入る',
                'risk_content1' => 'リスク1の内容が入る',
                'risk_img1' => null,
                'risk_title2' => 'リスク2のタイトルが入る',
                'risk_content2' => 'リスク2の内容が入る',
                'risk_title3' => 'リスク3のタイトルが入る',
                'risk_content3' => 'リスク3の内容が入る',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '11:30' ,
                'content' => '現地到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '12:00' ,
                'content' => '食事' ,
                  'url' => null,
                'is_move' => '1',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '14:00' ,
                'content' => '散歩' ,
                  'url' => null,
                'is_move' => '1',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '15:00' ,
                'content' => '出発' ,
                  'url' => null,
                'is_move' => '0',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '16:00' ,
                'content' => '家到着' ,
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9' ,
                'is_move' => '1',//1移動なし
                'risk_title1' => null,
                'risk_content1' => null,
                'risk_img1' => null,
                'risk_title2' => null,
                'risk_content2' => null,
                'risk_title3' => null,
                'risk_content3' => null,
                'created_at' => Now(),
               ],
        ]);
    }
}
