<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
               [
                'client_name' => '山田' ,
                'client_name2' => '太郎' ,
                'age' => '80' ,
                'desease' => '脳梗塞',
                'carelevel' => '要介護5',
                'doctor_id' => '1',
                'caremanager_id' => '1',
                'treatment_title' => '吸引',
                'treatment_content' => '手順が入ります。',
                'treatment_point' => '本人が必要ないときは無理にしなくて良い。',
                'created_at' => Now(),
               ],
               [
                'client_name' => '佐藤' ,
                'client_name2' => '花子' ,
                'age' => '70' ,
                'desease' => 'ALS',
                'carelevel' => '要介護5',
                'doctor_id' => '2',
                'caremanager_id' => '2',
                'treatment_title' => '投薬',
                'treatment_content' => '手順が入ります。',
                'treatment_point' => 'NRS7以上の場合はオプソも検討する。',
                'created_at' => Now(),
               ],
        ]);
    }
}
