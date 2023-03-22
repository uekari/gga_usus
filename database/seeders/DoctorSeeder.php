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
                'address' => '福岡市',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
               [
                'doctor_name' => '阿藤美咲' ,
                'belong' => 'B病院' ,
                'address' => '北九州市',
                'tel' => '00011112222',
                'fax' => '00011112222',
                'created_at' => Now(),
               ],
        ]);
    }
}
