<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Seeds the user_types table

      DB::table('user_types')->insert([
        'id' => 1,
        'title' => 'admin',
      ]);

      DB::table('user_types')->insert([
        'id' => 2,
        'title' => 'user',
      ]);
    }
}
