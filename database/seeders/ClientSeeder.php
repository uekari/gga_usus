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
                'client_name' => '山田太郎' ,
                'client_name2' => 'やまだたろう' ,
                'age' => '80' ,
                'desease' => '脳梗塞',
                'carelevel' => '要介護5',
                'doctor_id' => '1',
                'caremanager_id' => '1',
                'user_id' => '1',
                'created_at' => Now(),
               ],
               [
                'client_name' => '佐藤花子' ,
                'client_name2' => 'さとうはなこ' ,
                'age' => '70' ,
                'desease' => 'ALS',
                'carelevel' => '要介護5',
                'doctor_id' => '2',
                'caremanager_id' => '2',
                'user_id' => '2',
                'created_at' => Now(),
               ],
               [
                'client_name' => '鈴木翼' ,
                'client_name2' => 'すずきつばさ' ,
                'age' => '90' ,
                'desease' => '廃用症候群',
                'carelevel' => '要介護4',
                'doctor_id' => '3',
                'caremanager_id' => '3',
                'user_id' => '3',
                'created_at' => Now(),
               ],
               [
                'client_name' => '白田加奈' ,
                'client_name2' => 'しろたかな' ,
                'age' => '68' ,
                'desease' => '脳性麻痺',
                'carelevel' => '要介護5',
                'doctor_id' => '1',
                'caremanager_id' => '2',
                'user_id' => '4',
                'created_at' => Now(),
               ],
        ]);
    }
}
