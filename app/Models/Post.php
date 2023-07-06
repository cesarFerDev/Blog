<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['title', 'subtitle', 'body', 'photo', 'author', 'author_photo', 'created_at'];
}
