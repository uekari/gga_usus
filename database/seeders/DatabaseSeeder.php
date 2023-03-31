<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CaremanagerSeeder::class,
            DoctorSeeder::class,
            ClientSeeder::class,
            ScheduleSeeder::class,
            TimeSeeder::class,
            TreatmentSeeder::class,
            TimeTreatmentSeeder::class,

         ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
