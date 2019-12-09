<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_category extends Model
{
    protected $table = 'post_category';
    protected $fillable = [
    	'name',
    	'description',
    ];
    
}
