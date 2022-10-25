<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "DSA",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quo hic nostrum, ratione rem modi sunt nisi delectus maxime inventore numquam excepturi in veritatis fugiat assumenda quis. 
            Est nemo assumenda magnam labore a exercitationem eos sed totam corrupti ut deleniti, nulla facilis nisi quibusdam modi, iure doloribus reiciendis corporis velit veritatis esse et minima dicta? Odio ullam assumenda, 
            voluptatibus fuga quaerat soluta dicta. Illum officiis molestiae perferendis asperiores omnis molestias reprehenderit ea deleniti libero. Delectus error incidunt fuga nihil eaque, 
            eligendi, corrupti, eius velit enim nobis officia ea. Repudiandae ipsum iste tempora rem dicta ullam magni amet itaque doloremque cum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "DR",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsum iure obcaecati ut accusamus, molestiae quia voluptas doloremque corporis quisquam, 
            repellat corrupti nihil animi, dolorem expedita sit! Debitis iusto ipsa nam eligendi. Quisquam nemo totam optio, animi placeat temporibus repudiandae, quae ad architecto illum sunt eaque doloribus dolore voluptatibus. Optio!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
