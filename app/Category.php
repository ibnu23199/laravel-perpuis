<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function artikels()
    {
        return $this->hasMany(Book::class);
    }
}
