<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {		
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Supreme user',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);

		$this->call(CompanySeeder::class);
		$this->call(ClientSeeder::class);
		$this->call(CompanyInfoSeeder::class);
		$this->call(ContentSeeder::class);		
    }
}
