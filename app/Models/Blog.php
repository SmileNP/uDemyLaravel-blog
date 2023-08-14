<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'is_admin',
    ];

    //inverse relationship
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
