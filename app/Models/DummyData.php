<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DummyData extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $dates = ['updated_at'];
    protected $with =['user','category'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
        
    }
}
