<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
    	'name',
    	'comment',
    	'rate_star','product_id','post_id','status'
    ];

    public function commentpro(){
    	return $this->belongsTo('App\Models\Product', 'product_id','id');
    }

    public function commentpost(){
    	return $this->belongsTo('App\Models\Post', 'post_id','id');
    }

}
