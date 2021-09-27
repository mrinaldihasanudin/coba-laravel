<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Clockwork\Storage\Search;

class PostController extends Controller
{
    public function index()
    {
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in '.$category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = ' By '.$author->name;
        }
        return view('posts', [
            "title" => 'All Posts' .$title,
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(4)->withQueryString(),
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
    
   

    public function categories(){
        return view('categories',[
        'title' => 'Categories',
        'categories' => Category::all(),
        "active" => 'categories'
        ]);
    }

 // public function category(Category $category) {
    //     return view('posts',[
    //         'title' => "Post By Category :  $category->name",
    //         'posts' => $category->posts->load(['category','author']),
    //         "active" => 'category'
    //     ]);
    // }

    // public function authors(User $author){
    //     return view('posts',[
    //     'title' => "Post By Author : $author->name ",
    //     'posts' =>  $author->posts->load(['category','author']),
    //     "active" => 'categories'
    //     ]);
    // }
}