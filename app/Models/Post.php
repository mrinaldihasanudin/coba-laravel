<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','slug','excerpt','body']; // ini harus isi semua data yang tercantum

    //atau bisa pake 
    protected $guarded = ['id']; 
    protected $with = ['author','category'];
    //ini gak boleh di isi id selain itu boleh

    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ?? false){
            return $query->where('title','like','%'.$filters['search'].'%')
            ->orWhere('excerpt','like','%'.$filters['search'].'%');
        }

        // $query->when($filters['search'] ?? false, function($query, $search){
        //     return $query->where('title','like','%'.$search.'%')
        //     ->orWhere('body','like','%'.$search.'%')
        //     ->orWhere('excerpt','like','%'.$search.'%');
        // });


        $query->when($filters['category'] ?? false,function($query,$category){
            return $query->wherehas('category', function ($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query,$author)=>
        $query->whereHas('author',fn($query)=>
        $query->where('username',$author))
    );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    
}