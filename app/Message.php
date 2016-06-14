<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message', 'user_id', 'destinataire', 'email', 'tel'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
