<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = array(
            'posts' => Post::all()
        );

        return view('post.index', $data);
    }

    public function show($post)
    {
        $data = array(
            'post' => Post::findOrFail($post)
        );
        return view('post.show', $data);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = array(
            'title' => $request->title,
            'body' => $request->body,
            'status' => $request->status
        );

        if (Post::create($post)) {
            echo 'Post Created';
        } else {
            echo 'Something Wrong';
        }
        return redirect('/posts');
    }
}
