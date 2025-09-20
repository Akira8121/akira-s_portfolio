<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['title', 'image', 'desc', 'detail'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
