<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     protected $table = 'message';
     protected $primaryKey = 'id';

     public function member() {
     	return $this->belongsTo('App\Member', 'account', 'account');
     }
}
