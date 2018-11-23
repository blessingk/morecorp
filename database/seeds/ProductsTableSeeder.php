<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        DB::table('products')->insertGetId([
          'name' => "Product 1",
          'sku' => "sk".$faker->randomNumber(4),
          'price' => $faker->randomNumber(4),
          'description' => "This is the product description",
        ]);

          DB::table('products')->insertGetId([
             'name' => "Product 2",
             'sku' => "sk".$faker->randomNumber(4),
             'price' => $faker->randomNumber(4),
             'description' => "This is the product description",
         ]);

         DB::table('products')->insertGetId([
            'name' => "Product 3",
            'sku' => "sk".$faker->randomNumber(4),
            'price' => $faker->randomNumber(4),
            'description' => "This is the product description",
        ]);

        DB::table('products')->insertGetId([
           'name' => "Product 4",
           'sku' => "sk".$faker->randomNumber(4),
           'price' => $faker->randomNumber(4),
           'description' => "This is the product description",
       ]);
       DB::table('products')->insertGetId([
          'name' => "Product 5",
          'sku' => "sk".$faker->randomNumber(4),
          'price' => $faker->randomNumber(4),
          'description' => "This is the product description",
      ]);
    }
}
