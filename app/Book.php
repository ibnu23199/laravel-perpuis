<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('created_at', 'asc');
    }
}
