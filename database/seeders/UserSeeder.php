<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::factory()->create([
      'name' => 'Elias Vazquez',
      'email' => 'eliasvroca@gmail.com',
      'password' => bcrypt('*HxfXNHD2ZJ!uiC1'),
      'dni' => '12345678',
      'phone' => '123-456-7890',
      'address' => '123 Main St',
    ])->assignRole('Doctor');
  }
}
