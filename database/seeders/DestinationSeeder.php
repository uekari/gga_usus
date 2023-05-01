<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
               [
                'schedule_id' => '1' ,
                'time' => '09:10' ,
                'content' => '家に訪問' ,
                'address' => '福岡県福岡市中央区大名１丁目３−４１ プリオ大名ビル 1F',
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '09:40' ,
                'content' => '家を出る' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
[
                'schedule_id' => '1' ,
                'time' => '10:00' ,
                'content' => 'IC到着' ,
                'address' => "〒812-0012 福岡県福岡市博多区博多駅中央街１−１",
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '11:30' ,
                'content' => '現地到着' ,
                'address' => null,
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '12:00' ,
                'content' => 'レストランで休憩' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '1' ,
                'time' => '12:40' ,
                'content' => '梨狩り' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '1' ,
                'time' => '14:00' ,
                'content' => '出発' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '1' ,
                'time' => '15:00' ,
                'content' => '家到着' ,
                'address' => '福岡県福岡市中央区大名１丁目３−４１ プリオ大名ビル 1F',
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '09:30' ,
                'content' => '電車に乗る' ,
                'address' => null,
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '10:30' ,
                'content' => '乗り換え' ,
                'address' => null,
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '11:30' ,
                'content' => '現地到着' ,
                'address' => null,
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'time' => '14:30' ,
                'content' => '家到着' ,
                'address' => '福岡県福岡市中央区大名１丁目３−４１ プリオ大名ビル 1F',
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '09:10' ,
                'content' => '家に訪問' ,
                'address' => '福岡県福岡市中央区大名１丁目３−４１ プリオ大名ビル 1F',
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '09:40' ,
                'content' => '家を出る' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '10:00' ,
                'content' => 'IC到着' ,
                'address' => null,
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '11:30' ,
                'content' => '現地到着' ,
                'address' => null,
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '12:00' ,
                'content' => '食事' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '14:00' ,
                'content' => '散歩' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '15:00' ,
                'content' => '出発' ,
                'address' => null,
                                'url' => null,
                'created_at' => Now(),
               ],
                [
                'schedule_id' => '3' ,
                'time' => '16:00' ,
                'content' => '家到着' ,
                'address' => '福岡県福岡市中央区大名１丁目３−４１ プリオ大名ビル 1F',
                                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'created_at' => Now(),
               ],
        ]);
    }
}
