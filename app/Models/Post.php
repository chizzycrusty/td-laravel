<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Post extends Model
{
    protected $fillable = ['title', 'img', 'type', 'content', 'user_id', 'adresse', 'postal', 'lieu', 'region'];

    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function comments() {
    	return $this->hasMany('App\Models\Comment');
    }
}
