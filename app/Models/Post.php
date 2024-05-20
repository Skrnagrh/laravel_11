<?php

namespace App\Models;

class Post
{
 public static function all()
 {
    return [
        [
            'id' => 1,
            'slug'=> 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Mansur s',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid ut fugit obcaecati enim? Enim, est saepe, mollitia aut, explicabo dolore nulla minus autem eius nihil illo cupiditate rerum eum.',
        ],
        [
            'id' => 2,
            'slug'=> 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Samuel Leonardo',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, soluta. Unde delectus doloremque vel officia error et, quisquam ex porro, quia ipsa pariatur ducimus veritatis. Excepturi minima aliquam ex suscipit.
            ',
        ]
        ];
 }
} ?>
