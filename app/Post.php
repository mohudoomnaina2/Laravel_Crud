<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'Name', 'Email', 'postTitle', 'postContent',
    ];
}
