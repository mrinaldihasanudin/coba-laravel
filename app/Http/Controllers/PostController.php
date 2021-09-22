<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::latest()->get()
            // "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", "post" => $post
        ]);
    }
    
    public function category(Category $category) {
        return view('category',[
            'title' => $category->name,
            'posts' => $category->posts,
            'name_category' => $category->name
        ]);
    }

    public function categories(){
        return view('categories',[
        'title' => 'Categories',
        'categories' => Category::all()
        ]);
    }

    public function authors(User $author){
        return view('posts',[
        'title' => 'User Post',
        'posts' => $author->posts
        ]);
    }
}