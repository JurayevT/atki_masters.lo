<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo('App\Models\User', 'author_id', 'id');
    }
}
