<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('risks')->insert([
            [
                'destination_id' => '1',
                'title' => '特記事項のタイトル',
                'content' => '特記事項の内容1',
                'created_at' => Now(),
            ],
            [
                'destination_id' => '1',
                'title' => '特記事項のタイトル',
                'content' => '特記事項の内容2',
                'created_at' => Now(),
            ],
            [
                'destination_id' => '1',
                'title' => '特記事項のタイトル',
                'content' => '特記事項の内容3',
                'created_at' => Now(),
            ],
            [
                'destination_id' => '2',
                'title' => '特記事項のタイトル',
                'content' => '特記事項の内容',
                'created_at' => Now(),
            ],
            [
                'destination_id' => '2',
                'title' => '特記事項のタイトル',
                'content' => '特記事項の内容',
                'created_at' => Now(),
            ],
            [
                'destination_id' => '3',
                'title' => '特記事項のタイトル',
                'content' => '特記事項の内容',
                'created_at' => Now(),
            ],
            [
                'destination_id' => '3',
                'title' => '特記事項のタイトル',
                'content' => '特記事項の内容',
                'created_at' => Now(),
            ],
        ]);
    }
}
