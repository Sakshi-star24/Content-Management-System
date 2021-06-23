<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'News'
        ]);

        $author1 = User::create([
            'name' => 'Jon Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'password' => Hash::make('jane123')
        ]);

        $category2 = Category::create([
            'name' => 'Marketing'
        ]);

        $category3 = Category::create([
            'name' => 'Partnership'
        ]);

        $post1 = Post::create([
            'title' => 'Sakshi Gupta',
            'description' => 'Lorem Ipsum dolor amit set',
            'content' => 'Lorem Ipsum dolor amit set',
            'category_id' => $category1->id,
            'image' => '../app/img/bg/6.jpg',
            'user_id' => $author1->id
        ]);

        $post2 = Post::create([
            'title' => 'Shalini Biyani',
            'description' => 'Lorem Ipsum dolor amit set',
            'content' => 'Lorem Ipsum dolor amit set',
            'category_id' => $category2->id,
            'image' => '../app/img/bg/7.jpg',
            'user_id' => $author2->id
        ]);

        $post3 =Post::create([
            'title' => 'Manoj Das',
            'description' => 'Lorem Ipsum dolor amit set',
            'content' => 'Lorem Ipsum dolor amit set',
            'category_id' => $category3->id,
            'image' => '../app/img/bg/8.jpg',
            'user_id' => $author1->id
        ]);

        $post4 = Post::create([
            'title' => 'Simran Saini',
            'description' => 'Lorem Ipsum dolor amit set',
            'content' => 'Lorem Ipsum dolor amit set',
            'category_id' => $category2->id,
            'image' => '../app/img/bg/9.jpg',
            'user_id' => $author2->id
        ]);

        $tag1 = Tag::create([
            'name' => 'Job'
        ]);

        $tag2 = Tag::create([
            'name' => 'Customers'
        ]);

        $tag3 = Tag::create([
            'name' => 'Record'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);
    }
}
