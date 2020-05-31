<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model {
    //
    protected $fillable = [
        'user_id', 'categories_id', 'title', 'content', 'thumbnail_path', 'status',
    ];

    public function category() {
        return $this->belongsTo( Category::class,'category_id' );
    }
    public function user() {
        return $this->belongsTo( User::class );
    }
}
