<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'=> 'Rinaldi',
        //     'email' => 'rinaldi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=> 'Dodit',
        //     'email' => 'dodit@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name'=> 'Gamming',
            'slug' => 'web-gamming'
        ]);

        Category::create([
            'name'=> 'Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Category::create([
        //     'name'=> 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi maiores expedita saepe autem doloremque omnis voluptates beatae eum? Labore, doloribus?',
        //     'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing    elit. Provident, unde placeat tempore aut optio harum nostrum   explicabo. A dolor aliquam eveniet eum, iusto totam excepturi vitae eligendi corrupti, doloremque odit, eaque nulla necessitatibus debitis! Commodi ipsum, eaque hic corrupti rem voluptatem ipsam optio sint quisquam at, vero doloribus nam molestias?',
        //     'category_id'=>1,
        //     'user_id'=>1
            
        // ]);
        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi maiores expedita saepe autem doloremque omnis voluptates beatae eum? Labore, doloribus?',
        //     'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing    elit. Provident, unde placeat tempore aut optio harum nostrum   explicabo. A dolor aliquam eveniet eum, iusto totam excepturi vitae eligendi corrupti, doloremque odit, eaque nulla necessitatibus debitis! Commodi ipsum, eaque hic corrupti rem voluptatem ipsam optio sint quisquam at, vero doloribus nam molestias?',
        //     'category_id'=>1,
        //     'user_id'=>1
            
        // ]);
        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi maiores expedita saepe autem doloremque omnis voluptates beatae eum? Labore, doloribus?',
        //     'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing    elit. Provident, unde placeat tempore aut optio harum nostrum   explicabo. A dolor aliquam eveniet eum, iusto totam excepturi vitae eligendi corrupti, doloremque odit, eaque nulla necessitatibus debitis! Commodi ipsum, eaque hic corrupti rem voluptatem ipsam optio sint quisquam at, vero doloribus nam molestias?',
        //     'category_id'=>2,
        //     'user_id'=>1
            
        // ]);

        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi maiores expedita saepe autem doloremque omnis voluptates beatae eum? Labore, doloribus?',
        //     'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing    elit. Provident, unde placeat tempore aut optio harum nostrum   explicabo. A dolor aliquam eveniet eum, iusto totam excepturi vitae eligendi corrupti, doloremque odit, eaque nulla necessitatibus debitis! Commodi ipsum, eaque hic corrupti rem voluptatem ipsam optio sint quisquam at, vero doloribus nam molestias?',
        //     'category_id'=>2,
        //     'user_id'=>2
            
        // ]);
    }
}
