<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);

        $authors = Author::factory(10)->create();
        $categoryIds = Category::pluck('id');

        for ($i = 0; $i < 50; $i++) {
            $book = Book::factory()->create([
                'author_id' => $authors->random()->getKey(),
            ]);

            $book->categories()->attach(
                $categoryIds->random(rand(1, 3))->all()
            );
        }
    }
}