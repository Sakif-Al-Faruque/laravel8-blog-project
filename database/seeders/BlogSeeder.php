<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Faker\Factory as Faker;



class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $blog = new Blog;

        $blog->title = $faker->text(5);;
        $blog->description = $faker->text(50);
        $blog->image = "my-img.jpg";
        $blog->date = $faker->date();

        $blog->save();
    }
}
