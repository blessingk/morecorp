<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Seeds user table with some randomly generated
    factory(App\User::class, 10)->create()
        ->each(function ($u) {
            // Run other commands
        });

    $faker = Faker\Factory::create();

    $id = DB::table('users')->insertGetId([
        'name' => 'User',
        'email' => 'user@morecorp.com',
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
        'user_type_id' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

  }
}
