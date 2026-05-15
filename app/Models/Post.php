<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'user_id',
        'status',
        'image',
    ];



    protected function user() {
        return $this->belongsTo(User::class , "user_id");
    }
}
