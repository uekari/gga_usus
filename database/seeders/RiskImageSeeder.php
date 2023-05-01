<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiskImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('risk_images')->insert([
            [
                'risk_id' => '1',
                'img_path' => 'risk_img/test.png',
                'created_at' => Now(),
            ],
            [
                'risk_id' => '1',
                'img_path' => 'risk_img/test.png',
                'created_at' => Now(),
            ],
            [
                'risk_id' => '1',
                'img_path' => 'risk_img/test.png',
                'created_at' => Now(),
            ],
            [
                'risk_id' => '2',
                'img_path' => 'risk_img/test.png',
                'created_at' => Now(),
            ],
            [
                'risk_id' => '2',
                'img_path' => 'risk_img/test.png',
                'created_at' => Now(),
            ],
            [
                'risk_id' => '3',
                'img_path' => 'risk_img/test.png',
                'created_at' => Now(),
            ],
            [
                'risk_id' => '3',
                'img_path' => 'risk_img/test.png',
                'created_at' => Now(),
            ],
        ]);
    }
}
