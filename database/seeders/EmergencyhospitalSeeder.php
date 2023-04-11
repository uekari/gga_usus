<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmergencyhospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emergencyhospitals')->insert([
               [
                'schedule_id' => '1' ,
                'name' => '千賀蒼' ,
                'hospital' => '阿病院' ,
                'address' => '福岡市南区1-11-000',
                'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '1' ,
                'name' => '渡辺愛',
                'hospital' => '位病院' ,
                'address' => '福岡県筑紫郡那珂川市松木３',
              'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '1' ,
                'name' => '伊藤由紀' ,
                'hospital' => '宇病院' ,
                'address' => ' 福岡県那珂川市西畑1',
                  'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'name' => '中山恵' ,
                'hospital' => '江病院' ,
                'address' => '福岡県大野城市牛頸1-2',
                  'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '2' ,
                'name' => '園田新' ,
                'hospital' => '尾病院' ,
                'address' => '福岡県春日市須玖南6-66',
                  'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '3' ,
                'name' => '上野輝' ,
                'hospital' => '木病院' ,
                'address' => '福岡県筑紫野市上古賀908',
                  'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'schedule_id' => '4' ,
                'name' => '盛岡美子',
                'hospital' => '九病院' ,
                'address' => '福岡県大野城市若草888',
                  'url' => 'https://goo.gl/maps/8akDVz5qdJqs4FTM9',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
        ]);
    }
}
