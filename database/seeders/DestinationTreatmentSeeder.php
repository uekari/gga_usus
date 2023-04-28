<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DestinationTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('destination_treatment')->insert([
               [
                'destination_id' => '1' ,
                'treatment_id' => '1' ,
               ],
               [
                'destination_id' => '1' ,
                'treatment_id' => '2' ,
               ],
               [
                'destination_id' => '2' ,
                'treatment_id' => '1' ,
               ],
        ]);
    }
}
