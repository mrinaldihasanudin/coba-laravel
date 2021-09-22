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
    //ini gak boleh di isi id selain itu boleh

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}