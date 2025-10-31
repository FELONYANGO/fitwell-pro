<?php

    namespace Database\Seeders;

    use App\Models\User;
    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */

        // User::factory(10)->create();

        public function run(): void
{
    // Create admin
    \App\Models\User::factory()->create([
        'name' => 'Fitwell Admin',
        'email' => 'admin@fitwellpro.com',
        'password' => bcrypt('password'),
        'role' => 'admin',
        'status' => 'active',
    ]);

    // Step 1: Create Trainers and their Programs
    \App\Models\Trainer::factory(5)
        ->hasPrograms(3)
        ->create();

    // Step 2: Create Clients
    \App\Models\Client::factory(10)->create();

    // Step 3: Now create assignments using existing clients & programs
    \App\Models\ProgramAssignment::factory(10)->create();

    // Step 4: Other data
    \App\Models\Workout::factory(20)->hasExercises(5)->create();
    \App\Models\Message::factory(15)->create();
    \App\Models\Measurement::factory(20)->create();
    \App\Models\ProgressUpload::factory(20)->create();
}

    }
