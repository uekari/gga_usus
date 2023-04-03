<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TimeTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('time_treatment')->insert([
               [
                'time_id' => '1' ,
                'treatment_id' => '1' ,
               ],
               [
                'time_id' => '1' ,
                'treatment_id' => '2' ,
               ],
               [
                'time_id' => '2' ,
                'treatment_id' => '1' ,
               ],
        ]);
    }
}
