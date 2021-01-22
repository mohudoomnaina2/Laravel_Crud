<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'Name', 'Email', 'postTitle', 'postContent',
    ];

    protected $dates = ['deleted_at'];
}
