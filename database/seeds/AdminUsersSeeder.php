<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Seeds user table with admin users
    DB::table('users')->insert([
      'name' => 'Admin',
      'email' => 'admin@morecorp.com',
      'password' => bcrypt('admin'),
      'user_type_id' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
  }
}
