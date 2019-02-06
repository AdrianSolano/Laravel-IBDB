<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['user_id', 'publisher_id','title', 'slug', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function author()
    {
        return $this->belongsToMany(Author::class);
    }
}
