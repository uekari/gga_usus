<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
               [
                'doctor_name' => '千田雄太' ,
                'belong' => 'A病院' ,
                'address' => '福岡市南区1-11-000',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'doctor_name' => '阿藤美咲' ,
                'belong' => 'B病院' ,
                'address' => '福岡市城南区3-11-333',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'doctor_name' => '小林幸' ,
                'belong' => 'B病院' ,
                'address' => '太宰府市連歌屋1-2-33',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
        ]);
    }
}
