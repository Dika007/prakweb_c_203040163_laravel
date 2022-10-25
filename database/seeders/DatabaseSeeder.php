<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Dikz',
            'email' => 'DKZ@gmail.com',
            'password' => bcrypt('sepakbola')
        ]);

        User::create([
            'name' => 'DKZ',
            'email' => 'ZZZZ@gmail.com',
            'password' => bcrypt('sepakbola321')
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'Web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'lorem pertama dibuat',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore dolores consectetur atque iure dolor maxime dolorum expedita aliquam recusandae dolore natus rem,</p><p>ab autem pariatur magni architecto eligendi quaerat cumque incidunt corrupti? Consequuntur odit assumenda dicta veritatis vel delectus temporibus labore necessitatibus quae eum consequatur sed ipsa amet facilis,</p><p>accusamus esse minus architecto cumque fugit voluptate. Impedit deleniti, animi architecto recusandae earum nostrum ad harum aperiam numquam ut voluptate enim. Officia consequatur, iste iusto harum nostrum aperiam incidunt nobis provident praesentium rerum saepe, quae eius voluptatem et laudantium molestias molestiae modi neque. Repudiandae, reiciendis eveniet temporibus minima nesciunt accusantium quae.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'lorem kedua dibuat',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore dolores consectetur atque iure dolor maxime dolorum expedita aliquam recusandae dolore natus rem,</p><p>ab autem pariatur magni architecto eligendi quaerat cumque incidunt corrupti? Consequuntur odit assumenda dicta veritatis vel delectus temporibus labore necessitatibus quae eum consequatur sed ipsa amet facilis,</p><p>accusamus esse minus architecto cumque fugit voluptate. Impedit deleniti, animi architecto recusandae earum nostrum ad harum aperiam numquam ut voluptate enim. Officia consequatur, iste iusto harum nostrum aperiam incidunt nobis provident praesentium rerum saepe, quae eius voluptatem et laudantium molestias molestiae modi neque. Repudiandae, reiciendis eveniet temporibus minima nesciunt accusantium quae.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'lorem ketiga dibuat',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore dolores consectetur atque iure dolor maxime dolorum expedita aliquam recusandae dolore natus rem,</p><p>ab autem pariatur magni architecto eligendi quaerat cumque incidunt corrupti? Consequuntur odit assumenda dicta veritatis vel delectus temporibus labore necessitatibus quae eum consequatur sed ipsa amet facilis,</p><p>accusamus esse minus architecto cumque fugit voluptate. Impedit deleniti, animi architecto recusandae earum nostrum ad harum aperiam numquam ut voluptate enim. Officia consequatur, iste iusto harum nostrum aperiam incidunt nobis provident praesentium rerum saepe, quae eius voluptatem et laudantium molestias molestiae modi neque. Repudiandae, reiciendis eveniet temporibus minima nesciunt accusantium quae.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'lorem keempat dibuat',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore dolores consectetur atque iure dolor maxime dolorum expedita aliquam recusandae dolore natus rem,</p><p>ab autem pariatur magni architecto eligendi quaerat cumque incidunt corrupti? Consequuntur odit assumenda dicta veritatis vel delectus temporibus labore necessitatibus quae eum consequatur sed ipsa amet facilis,</p><p>accusamus esse minus architecto cumque fugit voluptate. Impedit deleniti, animi architecto recusandae earum nostrum ad harum aperiam numquam ut voluptate enim. Officia consequatur, iste iusto harum nostrum aperiam incidunt nobis provident praesentium rerum saepe, quae eius voluptatem et laudantium molestias molestiae modi neque. Repudiandae, reiciendis eveniet temporibus minima nesciunt accusantium quae.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
