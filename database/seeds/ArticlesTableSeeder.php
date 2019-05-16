<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('articles')->delete();

    $faker = Faker::create('en_US');

    for($i = 0; $i < 10; $i++){
      Article::create([
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(),
        'published_at' => Carbon::today()
      ]);
    }
  }
}
