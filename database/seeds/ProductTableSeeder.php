<?php

use Illuminate\Database\Seeder;

use App\Product;
use App\ProductDetail;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
    Product::query()->delete();

    for($i=0; $i<10; $i++)
    {
      $product = Product::create([
        'title' => $faker->word,
        'ingredients' => $faker->sentence(3),
        'price' => $faker->randomDigit,
        'type' => 'pizza',
        'picture' => $faker->imageUrl($width = 640, $height = 480)
      ]);

      $detail = ProductDetail::create([
        'product_id' => $product->id,
        'is_selected' => rand(0, 1)
      ]);
    }

    for($i=0; $i<10; $i++)
    {
      $product = Product::create([
        'title' => $faker->word,
        'ingredients' => $faker->sentence(3),
        'price' => $faker->randomDigit,
        'type' => 'discount',
        'picture' => $faker->imageUrl($width = 640, $height = 480)
      ]);

      $detail = ProductDetail::create([
        'product_id' => $product->id,
        'show_slider' => rand(0, 1),
        'is_selected' => rand(0, 1)
      ]);
    }

    for($i=0; $i<10; $i++)
    {
      $product = Product::create([
        'title' => $faker->word,
        'ingredients' => $faker->sentence(3),
        'price' => $faker->randomDigit,
        'type' => 'extra',
        'picture' => $faker->imageUrl($width = 640, $height = 480)
      ]);

      $detail = ProductDetail::create([
        'product_id' => $product->id,
        'is_selected' => rand(0, 1)
      ]);
    }


    }
}
