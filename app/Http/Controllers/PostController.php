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
            "title" => 'All Posts',
            "posts" => Post::latest()->get(),
            // "posts" => Post::all()
            "active" => 'posts'
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", "post" => $post,
            "active" => 'posts'
        ]);
    }
    
    public function category(Category $category) {
        return view('posts',[
            'title' => "Post By Category :  $category->name",
            'posts' => $category->posts->load(['category','author']),
            "active" => 'category'
        ]);
    }

    public function categories(){
        return view('categories',[
        'title' => 'Categories',
        'categories' => Category::all(),
        "active" => 'categories'
        ]);
    }

    public function authors(User $author){
        return view('posts',[
        'title' => "Post By Author : $author->name ",
        'posts' =>  $author->posts->load(['category','author']),
        "active" => 'categories'
        ]);
    }
}