<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $data = array(
            'posts' => array(
                ['title' => 'Post 1', 'body' => 'This is the first post'],
                ['title' => 'Post 2', 'body' => 'This is the second post'],
                ['title' => 'Post 3', 'body' => 'This is the third post'],
                ['title' => 'Post 4', 'body' => 'This is the fourth post'],
            )
        );

        return view('post.index', $data);
    }

    public function create()
    {
        return 'Create a post';
    }
}
